FROM php:7.4-apache
RUN apt update
RUN docker-php-ext-install pdo_mysql
RUN echo "ServerName wineandwatch.com" >> /etc/apache2/apache2.conf
RUN mv /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini
#RUN mv /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini
RUN sed -i "s/default_socket_timeout = 60/default_socket_timeout = 300/" /usr/local/etc/php/php.ini