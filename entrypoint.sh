#!/bin/bash

# Start PHP-FPM
php-fpm -D

 # Install/update composer dependencies
composer install
# Run migrations if needed
php artisan migrate --force
php artisan db:seed

# Clear and cache routes
php artisan route:clear
php artisan route:cache

# Clear and cache configs
php artisan config:clear
php artisan config:cache
php artisan optimize

# Start the Laravel queue worker
php artisan queue:work --daemon &

# Start Nginx
nginx -g "daemon off;"
