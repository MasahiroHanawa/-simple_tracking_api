FROM php:7-fpm

RUN apt-get update
RUN apt-get install -y libmcrypt-dev mysql-client mcrypt git curl gnupg
RUN curl -sL https://deb.nodesource.com/setup_8.x | bash
RUN apt-get install -y nodejs
RUN docker-php-ext-install pdo_mysql
RUN apt-get install -y vim
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN useradd -m -s /bin/bash -u 1000 masahirohanawa
ARG PUID=33
ARG PGID=33
RUN groupmod -g $PGID www-data
RUN usermod -u $PUID www-data

RUN chown -R www-data:www-data /var/www
RUN chmod 755 /var/www

WORKDIR /var/www

COPY ./php.ini /usr/local/etc/php/php.ini