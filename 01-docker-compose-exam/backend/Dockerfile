# Použijeme PHP s Apache
FROM php:8.1-apache

# Skopírujeme zdrojové súbory do webového adresára
COPY . /var/www/html/

# Exponujeme port 80
EXPOSE 80

RUN a2enmod rewrite