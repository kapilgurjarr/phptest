FROM php:7.4-apache
WORKDIR /var/www/html
COPY . /var/www/html
ENV APACHE_DOCUMENT_ROOT /var/www/html
RUN a2enmod rewrite
RUN docker-php-ext-install pdo pdo_mysql
EXPOSE 80
CMD ["apache2-foreground"]
