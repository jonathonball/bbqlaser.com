FROM php:fpm-alpine

COPY ./php.ini /etc/php7/php.ini

# Install Additional dependencies
RUN apk update && apk add --no-cache \
    build-base shadow vim curl \
    php7 \
    php7-fpm \
    php7-common \
    php7-pdo \
    php7-pdo_mysql \
    php7-mysqli \
    php7-mcrypt \
    php7-mbstring \
    php7-xml \
    php7-openssl \
    php7-json \
    php7-phar \
    php7-zip \
    php7-gd \
    php7-dom \
    php7-session \
    php7-zlib
RUN apk add --no-cache --virtual .build-deps \
    g++ make autoconf yaml-dev

# Add and Enable PHP-PDO Extenstions
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-enable pdo_mysql
RUN pecl install yaml
RUN docker-php-ext-enable yaml

CMD ["php-fpm"]

EXPOSE 9000
