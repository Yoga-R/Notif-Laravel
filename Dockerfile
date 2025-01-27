# Gunakan image PHP
FROM php:8.0-fpm

# Install ekstensi yang diperlukan
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Set direktori kerja
WORKDIR /var/www

# Salin file aplikasi ke dalam container
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install dependensi PHP
RUN composer install --no-dev --optimize-autoloader

# Set permission folder
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port
EXPOSE 9000

CMD ["php-fpm"]
