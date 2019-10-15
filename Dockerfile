# Use an official PHP runtime as a parent image
FROM php:7.3-apache


COPY php.ini /usr/local/etc/php/
RUN apt-get update && apt-get install -y libfreetype6-dev libjpeg62-turobo-dev libpng12-dev mysql.client\
&& docker-php-ext-install pdo_mysql mysqli gd iconv \
&& docker-php-ext-install mbstring \
&& docker-php-ext-install mycrt

COPY ./blogsite.com.conf /etc/apache2/sites-available/
COPY ./hosts /etc/hosts
RUN a2enmod rewrite

# RUN a2enmod mcrypt

RUN service apache2 restart
WORKDIR /etc/apache2/sites-available/
RUN a2ensite blogsite.com.conf

EXPOSE 80