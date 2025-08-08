FROM ubuntu/apache2:2.4-22.04_edge
WORKDIR /var/www/html/
COPY . .
EXPOSE 80