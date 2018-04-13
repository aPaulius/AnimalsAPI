FROM php:7.1-fpm

RUN apt-get update \
	&& apt-get install -y \
        ca-certificates \
        curl \
        unzip \
        git \
    && rm -rf /var/lib/apt/lists/* \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && usermod -u 1000 www-data

CMD bash -c "cd /app \
     && composer install \
     && php bin/console doctrine:database:create --no-interaction \
     && php bin/console doctrine:migrations:migrate --no-interaction \
     && php bin/console doctrine:fixtures:load --no-interaction \
     && php-fpm -F"

# [x] dokumentacija
# [x] fixtures
# [x] DELETE pranesti, kad nebera
# [x] teises ir php komandos
# [x] animals/text