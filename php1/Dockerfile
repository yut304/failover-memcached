FROM php:7.1-fpm

MAINTAINER Chaiyut

RUN apt-get update -y \
    && apt-get install -y \
    gcc \
    libcurl4-openssl-dev \
    libmemcached-dev \
    libz-dev \
    make \
    wget \
    unzip \
    zlib1g-dev \
    && cd /tmp \
    && wget https://github.com/websupport-sk/pecl-memcache/archive/NON_BLOCKING_IO_php7.zip \
    && unzip NON_BLOCKING_IO_php7.zip \
    && cd pecl-memcache-NON_BLOCKING_IO_php7 \
    && phpize && ./configure --enable-memache && make && make install
    ### Version on pecl had problem !!!! ###
    #&& pecl install memcache-4.0.5.2 \
    #&& docker-php-ext-enable memcache

EXPOSE 9000

CMD ["php-fpm"]
