#!/bin/sh

# Wait for services like MySQL to be ready (optional)
sleep 5

# Run Laravel setup commands
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force

# Start Supervisor (or php-fpm/nginx directly)
exec /usr/bin/supervisord
