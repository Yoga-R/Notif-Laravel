#!/bin/bash

# Jalankan migrasi database (opsional)
# php artisan migrate --force

# Start services
service nginx start
php-fpm