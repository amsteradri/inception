
FROM debian:bullseye

RUN apt-get update \
    && apt-get install -y mariadb-server \
    mariadb-client

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
RUN chmod 644 /etc/mysql/mariadb.conf.d/50-server.cnf

COPY ./tools/script.sh /
RUN chmod +x script.sh

EXPOSE 3306

CMD ["/script.sh"]