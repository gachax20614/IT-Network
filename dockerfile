FROM php:7.3-apache

RUN apt-get update; apt-get install -y ssmtp

RUN docker-php-ext-install pdo_mysql