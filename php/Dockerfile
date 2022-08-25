FROM php:7.1-fpm

MAINTAINER Chaiyut

RUN apt-get update -y \
    && apt-get install -y libcurl4-openssl-dev \
    libmemcached-dev \
    libz-dev \
    zlib1g-dev \
    && pecl install memcached \
    && docker-php-ext-enable memcached

EXPOSE 9000

CMD ["php-fpm"]
