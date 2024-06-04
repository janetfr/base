FROM php:7.4-apache

RUN mkdir /var/www/html/mycoon-app
RUN mkdir /var/www/html/mycoon-app/apps
RUN mkdir /var/www/html/mycoon-app/apps/backoffice
RUN mkdir /var/www/html/mycoon-app/apps/backoffice/backend
RUN mkdir /var/www/html/mycoon-app/apps/backoffice/backend/public

ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get install -y --fix-missing \
    apt-utils \
    gnupg

RUN echo "deb http://packages.dotdeb.org jessie all" >> /etc/apt/sources.list
RUN echo "deb-src http://packages.dotdeb.org jessie all" >> /etc/apt/sources.list
#RUN curl -sS --insecure https://www.dotdeb.org/dotdeb.gpg | apt-key add -

RUN apt-get install -y \
        libzip-dev \
        zip \
        git \
  && docker-php-ext-configure zip \
  && docker-php-ext-install opcache \
  && docker-php-ext-install zip \
  && docker-php-ext-install pdo_mysql

RUN apt-get install -y libcurl4-openssl-dev pkg-config libssl-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN pecl install xdebug-2.8.1 \
    && pecl install apcu \
    && docker-php-ext-enable xdebug apcu \
    && pecl install mongodb

COPY 000-default.conf /etc/apache2/sites-available
COPY api.mycoon.local.conf /etc/apache2/sites-available
COPY php.ini /usr/local/etc/php

RUN a2enmod rewrite
RUN a2enmod headers
RUN a2ensite api.mycoon.local.conf
#RUN service apache2 restart
