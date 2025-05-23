FROM php:8.3.20-fpm-bookworm
ENV TZ=Asia/Tokyo

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libonig-dev && \
    rm -rf /var/lib/apt/lists/* && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    # install php extensions
    docker-php-ext-install zip pdo_mysql gd exif

# Composer install
COPY --from=composer:2.5.5 /usr/bin/composer /usr/bin/composer

# Setup Application
WORKDIR /var/www/
RUN composer install --optimize-autoloader --no-dev && \
    chmod -R 777 storage bootstrap/cache
