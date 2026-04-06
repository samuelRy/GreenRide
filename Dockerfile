FROM php:8.2-apache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN a2enmod rewrite

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY src/ /var/www/html/

WORKDIR /var/www/html/

RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

EXPOSE 80

CMD ["/bin/bash", "-c", "trap '' WINCH && apache2-foreground"]