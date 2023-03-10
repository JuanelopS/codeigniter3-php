FROM php:7.3-apache

#load mod_rewrite apache for ci3 friendly urls
COPY /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/rewrite.load

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli