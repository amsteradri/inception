#!/bin/bash

set -e
set -x

if [ -f "/var/www/html/wp-config.php" ]; then
    echo "Wordpress is already installed"
    exec "$@"
    exit 0
fi

# Update WP CLI
wp cli update --allow-root

# Install WP CLI
wp core download --path=/var/www/html --locale=es_ES --allow-root

# Create wp-config.php for the next installation of Wordpress
wp config create --dbname=wordpress --dbuser=wpuser --dbpass=password --dbhost=mariadb --allow-root

# Install Wordpress with CLI
wp core install --url=localhost --title=inception --admin_user=admin --admin_password=admin --admin_email=admin@admin.com --allow-root
# Create a new user
wp user create adgutier amsteradri@gmail.com --role=author --user_pass=pass --allow-root

# Change the ownership of the directory to www-data(Nginx user)
chown -R www-data:www-data /var/www/html
chmod -R 755 /var/www/html

# Execute the CMD from Dockerfile
exec "$@"