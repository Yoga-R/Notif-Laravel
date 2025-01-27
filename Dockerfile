# Gunakan image PHP yang mendukung Composer
FROM php:7.4-fpm

# Update dan install dependensi tambahan (termasuk Composer)
RUN apt-get update && apt-get install -y \
    curl \
    git \
    unzip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && apt-get clean

# Install ekstensi yang diperlukan
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Set direktori kerja
WORKDIR /var/www

# Salin file aplikasi ke dalam container
COPY . .

# Install dependensi Composer
RUN composer install --no-dev --optimize-autoloader

# Set permission folder
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port
EXPOSE 9000

CMD ["php-fpm"]
