#!/bin/bash

# Jalankan migrasi database (uncomment jika ingin otomatis)
# php artisan migrate --force

# Generate APP_KEY jika belum ada
if [ -z "$(grep APP_KEY=base64:.b3 .env)" ]; then
    php artisan key:generate
fi

# Start Nginx dan PHP-FPM
echo "Starting Nginx..."
service nginx start

echo "Starting PHP-FPM..."
php-fpm
