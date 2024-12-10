#!/bin/bash

MYSQL_INIT_FILE="/createdb.sql"

chown -R mysql: /var/lib/mysql
chmod 777 /var/lib/mysql

mysql_install_db >/dev/null 2>&1

if [ ! -d "/var/lib/mysql/$MARIADB_DATABASE" ]; then
    rm -f "$MYSQL_INIT_FILE"
    echo "CREATE DATABASE $MARIADB_DATABASE;" >> "$MYSQL_INIT_FILE"
    echo "CREATE USER '$MARIADB_USER'@'%' IDENTIFIED BY '$MARIADB_PASSWORD';" >> "$MYSQL_INIT_FILE"
    echo "GRANT ALL PRIVILEGES ON $MARIADB_DATABASE.* TO '$MARIADB_USER'@'%';" >> "$MYSQL_INIT_FILE"
    echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '$MARIADB_ROOT_PASSWORD';" >> "$MYSQL_INIT_FILE"
    echo "FLUSH PRIVILEGES;" >> "$MYSQL_INIT_FILE"
    echo "Starting server"
    mysqld_safe --init-file=$MYSQL_INIT_FILE >/dev/null 2>&1
else
    echo "Starting server"
    mysqld_safe >/dev/null 2>&1
fi
