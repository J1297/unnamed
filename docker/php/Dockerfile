FROM php:fpm-alpine

ARG VERSION=1.0
LABEL version="${VERSION}" \
      maintainer="Stanislav Schmidt. <stanislav.schmidt90@googlemail.com>"

ENV REDIS_VERSION 3.1.3
ENV IGBINARY_VERSION 2.0.4

# Dependencies
RUN	apk update --no-cache && \
	apk upgrade --no-cache && \
    apk add --no-cache \
        git \
        openssh-client \
        mariadb-client \
        mariadb-client-libs \
        libmcrypt-dev \
        freetype-dev \
        libjpeg-turbo-dev \
        zlib-dev \
        bzip2-dev \
        curl-dev \
        icu-dev \
        coreutils \
        autoconf \
        libuv\
        libstdc++ \
        cmake \
        g++ \
        gcc \
        make \
        pcre-dev \
        openssl-dev \
        libuv-dev \
        gmp-dev

# wie imports in java?
# Php extensions
RUN apk add --no-cache --virtual .sdk \
        alpine-sdk \
    && docker-php-ext-install -j$(nproc) \
        pdo \
        mysqli \
        pdo_mysql \
        zip \
        intl \
        mbstring \
        json \
        bcmath \
        opcache \
        imap \
        bz2 \
        curl \
        gd \
    && docker-php-ext-configure \
        gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && apk del .sdk \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
 # für verschlüsselte datenübertragung?
# Install mcrypt
RUN pecl install mcrypt-1.0.1 \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable mcrypt

# Install XDebug
RUN pecl install xdebug \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable xdebug \
    && php -m | grep xdebug \
    && { \
            echo "xdebug.remote_enable=on"; \
            echo "xdebug.remote_host=10.100.100.1"; \
            echo "xdebug.remote_port=9000"; \
        } | tee -a /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Install igbinary
#RUN pecl install igbinary-$IGBINARY_VERSION \ # versioned
RUN pecl install igbinary \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable igbinary \
    && php -m | grep igbinary

# Install redis driver
RUN pecl install redis \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable redis \
    && php -m | grep redis

#  alternative redis install
#RUN cd /tmp/pear \
#    && git clone https://github.com/phpredis/phpredis.git \
#    && cd phpredis \
#    && phpize . \
#    && ./configure --enable-redis-igbinary \
#    && make && make install \
#    && cd .. \
#    && rm -rf phpredis \
#    && docker-php-ext-enable redis \
#    && php -m | grep redis

# Configs
COPY docker/php/php.ini /usr/local/etc/php/conf.d/

COPY --from=composer /usr/bin/composer /usr/bin/composer

USER www-data

WORKDIR /var/www/app
# Angabe des Ordners aus dem die Seite ihre Daten bezieht




