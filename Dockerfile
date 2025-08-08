FROM ubuntu/apache2:2.4-22.04_edge
WORKDIR /var/www/html/
RUN cd /var/www/html/
COPY . .
CMD ["apachectl", "-D", "FOREGROUND"]