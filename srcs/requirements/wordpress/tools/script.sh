#!/bin/bash

set -e
set -x

if [ -f "/var/www/html/wp-config.php" ]; then
    echo "Wordpress is already installed"
    exec "$@"
    exit 0
fi

wp cli update --allow-root
wp core download --path=/var/www/html --locale=es_ES --allow-root
wp config create --dbname="$MARIADB_DATABASE" --dbuser="$MARIADB_USER" --dbpass="$MARIADB_PASSWORD" --dbhost="$WORDPRESS_DB_HOST" --allow-root
wp core install --url="$WORDPRESS_URL" --title="$WORDPRESS_TITLE" --admin_user="$WORDPRESS_ADMIN_USER" --admin_password="$WORDPRESS_ADMIN_PASSWORD" --admin_email="$WORDPRESS_ADMIN_EMAIL" --allow-root
wp user create "$WORDPRESS_USER" "$WORDPRESS_USER_EMAIL" --role=author --user_pass="$WORDPRESS_USER_PASSWORD" --allow-root
chown -R www-data:www-data /var/www/html
chmod -R 755 /var/www/html
exec "$@"
