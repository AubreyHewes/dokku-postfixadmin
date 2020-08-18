FROM postfixadmin:3-apache

ADD CHECKS /var/www/html
ADD src/config.local.php /var/www/html
ADD dokku-entrypoint.sh /dokku-entrypoint.sh
ADD src/php.ini /usr/local/etc/php/conf.d/00-php.ini

ENTRYPOINT ["/dokku-entrypoint.sh"]
CMD ["apache2-foreground"]
