<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class CheckBanned
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->status == 0) {
                $message = 'Your account is waiting for activation.';
            } elseif ($user->freeze == 1) {
                $message = 'Your account has been blocked.';
            } elseif ($user->banned_until && now()->lessThan($user->banned_until)) {
                $banned_days = now()->diffInDays($user->banned_until);
                $message = "Your account has been suspended for $banned_days " . Str::plural('day', $banned_days) . '. Please contact the administrator.';
            } else {
                return $next($request);
            }

            Auth::logout();
            Session::flush(); // Clear session data
            return redirect()->route('login')->with('status', $message);
        }

        return $next($request);
    }
}
