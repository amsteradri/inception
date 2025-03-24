# Proyecto Inception 42 Network 🚀

## ¿Qué es Inception? 🤔
Inception es un proyecto de la 42 Network que te introduce al mundo de la **virtualización** utilizando contenedores Docker. El objetivo es crear una pequeña infraestructura compuesta por diferentes servicios bajo reglas específicas.

## Arquitectura del Proyecto 🏗️
```
                      ┌─────────────────────────┐
                      │  Docker Network Bridge  │
                      └───────────┬─────────────┘
                                  │
          ┌──────────────────────┼──────────────────────┐
          │                       │                      │
┌─────────▼─────────┐  ┌─────────▼─────────┐  ┌─────────▼─────────┐
│     NGINX 🔒      │  │    WordPress 📝   │  │     MariaDB 💾    │
│    Contenedor     │  │    Contenedor     │  │    Contenedor     │
└───────────────────┘  └───────────────────┘  └───────────────────┘
          │                      │                      │
          │                      │                      │
          ▼                      ▼                      ▼
      volumen                volumen                volumen
```

## ¿Cómo funciona? 🔄

### 1️⃣ Docker-compose coordina todo 🎭
- Docker-compose crea una red virtual donde todos los contenedores pueden comunicarse
- Gestiona el ciclo de vida de los contenedores
- Configura los volúmenes persistentes

### 2️⃣ Componentes principales 🧩

#### NGINX 🔒
- Actúa como punto de entrada (puerta de acceso)
- Maneja conexiones TLS/SSL (¡solo TLSv1.2 o TLSv1.3!)
- Redirige el tráfico al contenedor de WordPress
- Puerto expuesto: 443 (HTTPS)

#### WordPress 📝
- Servidor web con PHP-FPM
- Aloja el sitio web
- Se conecta a la base de datos
- NO expone puertos directamente al host

#### MariaDB 💾
- Sistema de gestión de base de datos
- Almacena datos de WordPress
- NO expone puertos directamente al host
- Los datos persisten en volúmenes

### 3️⃣ Volúmenes persistentes 💾
- **WordPress**: archivos del sitio web
- **MariaDB**: datos de la base de datos
- Los datos se mantienen incluso si los contenedores se reinician

### 4️⃣ Flujo de datos 🌊
1. El usuario accede por HTTPS (puerto 443)
2. NGINX recibe la petición y la encripta
3. NGINX redirige al contenedor de WordPress
4. WordPress procesa la petición
5. WordPress consulta datos a MariaDB
6. MariaDB devuelve los datos
7. WordPress genera la página
8. NGINX envía la respuesta al usuario

## Requisitos técnicos 🛠️
- Cada servicio debe ejecutarse en su propio contenedor dedicado
- Los contenedores deben construirse desde cero (Dockerfile personalizado)
- No se permiten imágenes preconstruidas excepto por Alpine/Debian
- No se permite Docker Desktop ni equivalentes
- Se requiere docker-compose.yml
- Los contenedores deben reiniciarse en caso de fallo

## Consejos para el desarrollo 💡
1. Crea la red y los volúmenes primero
2. Construye los Dockerfiles uno a uno
3. Configura cada servicio cuidadosamente
4. Prueba las conexiones entre contenedores
5. Verifica que los datos persisten

## Comandos útiles ⌨️
```bash
# Crear y arrancar los contenedores
docker-compose up -d

# Ver contenedores en ejecución
docker ps

# Ver logs
docker logs [nombre-contenedor]

# Acceder a un contenedor
docker exec -it [nombre-contenedor] sh

# Detener todo
docker-compose down
```

¡Y así es como funciona Inception! 🎉 Un proyecto fascinante que te enseña a organizar una infraestructura de servicios utilizando Docker de manera segura y eficiente.
