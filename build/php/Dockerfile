# Archivo: Dockerfile
# Descripción: Dockerfile personalizado para crear una imagen PHP 8.1 con Apache
#              e instalar las extensiones necesarias para conexión con MySQL/MariaDB
# Autor: migbertweb
# Fecha: 2024
# Repositorio: https://github.com/migbertweb/docker-php-apache-mysql
# Licencia: MIT License
#
# Uso: Construye una imagen Docker basada en php:8.1-apache e instala las extensiones
#      mysqli, pdo y pdo_mysql para permitir la conexión con bases de datos MySQL/MariaDB.
#      Esta imagen es utilizada por el servicio php-apache en docker-compose.yml
#
# Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
#       derivados como código libre, especialmente para fines educativos.

# Imagen base: PHP 8.1 con Apache
FROM php:8.1-apache

# Actualizar paquetes e instalar extensiones PHP para MySQL/MariaDB
# mysqli: extensión mejorada de MySQL
# pdo: abstracción de acceso a datos
# pdo_mysql: driver PDO específico para MySQL/MariaDB
RUN apt-get update && \
  docker-php-ext-install mysqli pdo pdo_mysql
