# Use an official PHP runtime as a parent image

FROM php:7.0-apache  

RUN sudo apt-get purge apache2 \
    sudo apt-get install apache2

COPY . /var/www/php  