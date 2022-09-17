FROM php:8.0-fpm-alpine

COPY . /var/www/bacanje-novcica-api

WORKDIR /var/www/bacanje-novcica-api

RUN  curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
 && composer install --no-interaction --optimize-autoloader #--no-dev

RUN chown -R www-data:www-data /var/www/bacanje-novcica-api \
    && chmod -R 750 /var/www/bacanje-novcica-api

RUN apk update && \
    apk add  --no-cache grep git mysql-client curl libmcrypt zip libzip libzip-dev libmcrypt-dev openssh-client icu-dev \
     libxml2-dev freetype-dev libpng-dev libjpeg-turbo-dev g++ make autoconf libmemcached-dev libmemcached-libs musl php8-pecl-igbinary zlib php8-session php8-pecl-memcached && \
    pecl install memcached && \
    echo extension=memcached.so >> /usr/local/etc/php/conf.d/memcached.ini && \
    docker-php-ext-configure zip && \
    docker-php-ext-install pdo pdo_mysql bcmath sockets gd zip && \
    docker-php-ext-enable pdo pdo_mysql bcmath sockets gd zip memcached
    

RUN rm -rf /var/cache/apk/*

EXPOSE 9000
