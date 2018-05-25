FROM php:7.1-fpm

RUN rm /etc/apt/preferences.d/no-debian-php \
    && apt-get update \
	&& apt-get install -y \
        ca-certificates \
        curl \
        unzip \
        git \
        libxml2-dev \
        php-soap \
    && apt-get clean -y \
    && docker-php-ext-install soap \
    && rm -rf /var/lib/apt/lists/* \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && usermod -u 1000 www-data

CMD bash -c "cd /app \
     && composer install \
     && php bin/console doctrine:database:create --no-interaction \
     && php bin/console doctrine:migrations:migrate --no-interaction \
     && php bin/console doctrine:fixtures:load --no-interaction \
     && php-fpm -F"