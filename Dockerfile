# Usa a imagem oficial do PHP com Apache
FROM php:8.0-apache

# Instala e habilita as extensões do PDO para o MySQL
RUN docker-php-ext-install pdo pdo_mysql