#!/bin/bash

# Generate APP_KEY jika belum ada
if [ -z "$(grep APP_KEY=base64:.b3 .env)" ]; then
    php artisan key:generate
fi

# Jalankan migrasi database (opsional)
# php artisan migrate --force

# Start Nginx dan PHP-FPM
echo "Starting Nginx..."
service nginx start

echo "Starting PHP-FPM..."
php-fpm
