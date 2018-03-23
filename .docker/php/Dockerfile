FROM php:7.1-fpm

COPY . /var/www/html

RUN apt-get update \
	&& apt-get install -y \
        ca-certificates \
        curl \
        unzip \
        git \
    && rm -rf /var/lib/apt/lists/* \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN usermod -u 1000 www-data

CMD php-fpm -F
