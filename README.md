# laravel_template
laravel v11.41.3 fram v11.6.1 e417ebc php 8.4.3 on aws elastic beanstalk amazon linux

cd /var/app/current/
sudo rm -rf *
sudo rm -rf .*
ll -la
sudo yum update -y
sudo dnf upgrade --releasever=2023.6.20250203 -y
sudo su --
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
exit
sudo su --
printf "yes" | composer global require laravel/installer
laravel new fakeeh
mv fakeeh/{,.}* /var/app/current/
rm -rf fakeeh
nano .gitignore
nano .env
curl -fsSL https://rpm.nodesource.com/setup_20.x | sudo bash -
yum install -y nsolid
npm install && npm run build
printf "yes" | composer require spatie/laravel-permission
printf "yes" | composer require laravel-notification-channels/webhook
printf "yes" | composer require khaled.alshamaa/ar-php
printf "yes" | composer require spatie/laravel-csp
printf "yes" | composer require oza75/laravel-ses-complaints
printf "yes" | composer require league/flysystem-aws-s3-v3
printf "yes" | composer require aws/aws-sdk-php
php artisan vendor:publish
php artisan lang:publish
nano config/permission.php 
## change 'teams' => true, ##
php artisan optimize:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear
php artisan cache:clear
chown -R webapp.webapp *
chown -R webapp.webapp .*
php artisan migrate --seed
exit
