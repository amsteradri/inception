# Dockerfile
FROM debian:buster

# Actualizar la lista de paquetes y actualizar el sistema automáticamente
RUN apt-get update && apt-get install -y \
    nginx \
    openssl && \
    rm -rf /var/lib/apt/lists/* && \
    mkdir -p /etc/nginx/ssl && \
    chmod 700 /etc/nginx/ssl && \
    openssl req -newkey rsa:4096 -sha256 -x509 -nodes -days 365 \
    -subj "/C=ES/O=Inception/L=Madrid/CN=Inception" \
    -keyout /etc/nginx/ssl/nginx-selfsigned.key \
    -out /etc/nginx/ssl/nginx-selfsigned.crt && \
    mkdir -p /run/nginx && \
    rm /etc/nginx/sites-enabled/default  # <-- eliminar archivo default

# Copiar configuración personalizada a conf.d
COPY ./conf/default.conf /etc/nginx/conf.d

# Iniciar Nginx
CMD ["nginx", "-g", "daemon off;"]