# Archivo: Dockerfile
# Descripción: Dockerfile personalizado para crear una imagen MariaDB con permisos
#              correctos en el directorio de datos para garantizar la persistencia
# Autor: migbertweb
# Fecha: 2024
# Repositorio: https://github.com/migbertweb/docker-php-apache-mysql
# Licencia: MIT License
#
# Uso: Construye una imagen Docker basada en MariaDB (compatible con MySQL) y configura
#      los permisos necesarios en /var/lib/mysql para el almacenamiento de datos.
#      Esta imagen es utilizada por el servicio mysql en docker-compose.yml
#
# Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
#       derivados como código libre, especialmente para fines educativos.

# Imagen base: MariaDB (última versión disponible)
FROM mariadb:latest

# Cambiar a usuario root para configurar permisos
USER root

# Establecer permisos en el directorio de datos de MariaDB
# Esto asegura que los datos persistan correctamente en los volúmenes Docker
RUN chmod 755 /var/lib/mysql
