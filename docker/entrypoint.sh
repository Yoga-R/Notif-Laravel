#!/bin/bash

# Jalankan migrasi database (opsional)
# php artisan migrate --force

# Start Nginx dan PHP-FPM
echo "Starting Nginx..."
service nginx start

echo "Starting PHP-FPM..."
php-fpm
