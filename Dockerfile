FROM php:7.0-apache

MAINTAINER Paulius Aleksiunas "paulius.aleksiunas@mif.stud.vu.lt"

ENV COMPOSER_HOME=/root/.composer SYMFONY_ENV=prod

COPY . /var/www/html

RUN apt-get update -q -y \
    && apt-get install -q -y --force-yes --no-install-recommends \
        ca-certificates \
        curl \
        unzip \
        git \
    && rm -rf /var/lib/apt/lists/* \
    && mkdir -p $COMPOSER_HOME \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install -o -n --no-progress --prefer-dist \
    && echo "Clearing cache and logs" \
    && rm -Rf var/logs/* var/cache/*/* \
    && echo "Set permissions for www-data" \
    && chown -R www-data:www-data var/cache var/logs var/sessions

EXPOSE 80
CMD ["apache2-foreground"]