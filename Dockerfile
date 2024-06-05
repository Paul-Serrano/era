# Utiliser une image PHP officielle avec Apache
FROM php:8.1-apache

# Installation des extensions nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Copier les fichiers de l'application dans le conteneur
COPY public/ /var/www/html/
COPY src/ /var/www/html/src/

# Configuration Apache
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Activer les modules Apache
RUN a2enmod rewrite
