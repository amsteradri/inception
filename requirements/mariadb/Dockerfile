FROM debian:latest

# Actualizar e instalar MariaDB
RUN apt update && apt upgrade -y && apt install -y mariadb-server

# Copiar archivos de configuración y script
COPY 50-server.cnf /etc/mysql/mariadb.conf.d/
COPY init.sql /etc/mysql/init.sql
COPY script.sh ./

# Crear directorio para el socket y ajustar permisos
RUN mkdir /run/mysqld && \
    chown -R mysql:mysql /run/mysqld && \
    chmod 644 /etc/mysql/mariadb.conf.d/50-server.cnf && \
    chmod +x script.sh

# Definir el comando para ejecutar el script de inicialización
CMD ["./script.sh"]
