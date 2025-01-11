# Usa una imagen oficial de PHP con Apache
FROM php:8.0-apache

# Instala las extensiones necesarias para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia todos los archivos del proyecto al directorio web de Apache
COPY . /var/www/html

# Configura permisos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Exponer el puerto 80 para el servidor web
EXPOSE 80

# Comando para iniciar Apache
CMD ["apache2-foreground"]
