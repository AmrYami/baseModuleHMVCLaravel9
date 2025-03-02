import dotenv from 'dotenv';
import fs from 'fs';
import path from 'path';
import express from 'express';
import redis from 'redis';
import http from 'http';
import https from 'https';
import { Server as SocketIo } from 'socket.io';
// import { fileURLToPath } from 'url';

// Fix __dirname in ES Modules
// const __filename = fileURLToPath(import.meta.url);
// const __dirname = path.dirname(__filename);

dotenv.config({ path: path.join('../.env') });




const app = express();
const PORT = process.env.PORT_NOTIFICATIONS || 8890;
const HTTPS_ENABLED = process.env.HTTPS === 'TRUE';

// Setup SSL if HTTPS is enabled
let server;
if (HTTPS_ENABLED) {
    try {
        const options = {
            key: fs.readFileSync(process.env.SSL_KEY, 'utf8'),
            cert: fs.readFileSync(process.env.SSL_CERT, 'utf8'),
            ca: fs.readFileSync(process.env.SSL_CA, 'utf8')
        };
        server = https.createServer(options, app);
    } catch (error) {
        console.error("❌ SSL Error:", error.message);
        process.exit(1);
    }
} else {
    server = http.createServer(app);
}

// Initialize Socket.io with proper CORS settings
const io = new SocketIo(server, {
    cors: {
        origin: process.env.APP_URL || "*",
        methods: ["GET", "POST"],
        credentials: true
    }
});

// Setup Redis client
const redisConfig = {
    host: process.env.REDIS_HOST || '127.0.0.1',
    port: process.env.REDIS_PORT || 6379,
    password: process.env.REDIS_PASSWORD || undefined,
    tls: process.env.REDIS_TLS === 'true' ? {} : undefined
};

const redisClient = redis.createClient(redisConfig);

redisClient.on('error', (err) => console.error("🚨 Redis Error:", err));
redisClient.on('connect', () => console.log("✅ Redis Connected"));
redisClient.on('reconnecting', () => console.log("🔄 Redis Reconnecting"));

// Start server
server.listen(PORT, () => {
    console.log(`🚀 Server running on ${HTTPS_ENABLED ? 'https' : 'http'}://localhost:${PORT}`);
});

io.on('connection', (socket) => {
    console.log("🔗 New client connected:", socket.id);

    const clientRedis = redis.createClient(redisConfig);
    clientRedis.subscribe('message');

    clientRedis.on("message", (channel, message) => {
        try {
            const data = JSON.parse(message);
            if (data.channel === 'notifications') {
                socket.emit(`${channel}-notifications-${data.user_id}`, data.data);
                console.log(`📩 Sent message to ${channel}-notifications-${data.user_id}`);
            }
        } catch (err) {
            console.error("❌ JSON Parse Error:", err.message);
        }
    });

    socket.on('disconnect', () => {
        console.log("❌ Client disconnected:", socket.id);
        clientRedis.quit();
    });

    socket.on('error', (err) => console.error("🚨 Socket Error:", err));

    // Heartbeat check for dead connections
    socket.on('ping', () => socket.emit('pong'));
});

// Handle unexpected errors
process.on('uncaughtException', (err) => {
    console.error("🔥 Uncaught Exception:", err);
});
process.on('unhandledRejection', (err) => {
    console.error("🔥 Unhandled Rejection:", err);
});
