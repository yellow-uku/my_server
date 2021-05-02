FROM debian:buster
RUN apt-get update && apt-get install -y wget nginx mariadb-server php7.3 php-mysql php-fpm php-pdo php-gd php-cli php-mbstring
ADD https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-english.tar.gz phpmyadmin.tar.gz
RUN tar -xf phpmyadmin.tar.gz && mv phpMyAdmin-5.1.0-english /var/www/html/ && rm -rf phpmyadmin.tar.gz
COPY ./srcs/config.inc.php /var/www/html/phpMyAdmin-5.1.0-english
ADD https://ru.wordpress.org/latest-ru_RU.tar.gz wordpress.tar.gz
RUN tar -xvzf wordpress.tar.gz && mv wordpress /var/www/html/ && rm -rf wordpress.tar.gz
COPY ./srcs/wp-config.php /var/www/html/wordpress
COPY ./srcs/default /etc/nginx/sites-available/default
RUN chown -R www-data /var/www/html/
COPY ./srcs/service.sh ./
CMD bash service.sh;
