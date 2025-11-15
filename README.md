# Docker PHP Apache MySQL

Stack de desarrollo con Docker que incluye PHP 8.1 con Apache y MariaDB (MySQL) para proyectos web.

## 📋 Descripción

Este proyecto proporciona un entorno de desarrollo completo y listo para usar con:
- **PHP 8.1** con Apache
- **MariaDB** (compatible con MySQL)
- Configuración de Docker Compose para orquestación de contenedores
- Extensiones PHP necesarias para conexión con bases de datos (mysqli, PDO, PDO_MySQL)

## 🚀 Características

- ✅ PHP 8.1 con Apache
- ✅ MariaDB (última versión)
- ✅ Extensiones PHP para MySQL/MariaDB instaladas
- ✅ Volúmenes configurados para persistencia de datos
- ✅ Configuración lista para desarrollo local
- ✅ Ejemplo de conexión PHP-MySQL incluido

## 📁 Estructura del Proyecto

```
docker-php-apache-mysql/
├── app/
│   └── index.php          # Archivo PHP principal de ejemplo
├── build/
│   ├── php/
│   │   └── Dockerfile     # Imagen personalizada de PHP-Apache
│   └── mysql/
│       └── Dockerfile     # Imagen personalizada de MariaDB
├── docker-compose.yml     # Configuración de servicios Docker
├── LICENSE                # Licencia MIT
└── README.md              # Este archivo
```

## 🛠️ Requisitos Previos

- Docker instalado ([Instalar Docker](https://docs.docker.com/get-docker/))
- Docker Compose instalado (incluido con Docker Desktop)

## 📦 Instalación

1. Clona este repositorio:
```bash
git clone https://github.com/migbertweb/docker-php-apache-mysql.git
cd docker-php-apache-mysql
```

2. Construye y levanta los contenedores:
```bash
docker-compose up -d --build
```

3. Accede a la aplicación en tu navegador:
```
http://localhost
```

## 🔧 Configuración

### Servicios

- **PHP-Apache**: Puerto `80` (http://localhost)
- **MySQL/MariaDB**: Puerto `3306`

### Variables de Entorno

Las credenciales por defecto están configuradas en `docker-compose.yml`:
- **Usuario root**: `root`
- **Contraseña root**: `super-secret-password`
- **Base de datos**: `my-wonderful-website`

⚠️ **Importante**: Cambia estas credenciales en producción.

## 💻 Uso

### Verificar que los contenedores están corriendo

```bash
docker ps
```

### Conectarse a MySQL desde la terminal

1. Obtener el nombre del contenedor MySQL:
```bash
docker ps --format '{{.Names}}'
```

2. Conectarse al contenedor:
```bash
docker exec -ti <nombre-contenedor-mysql> bash
```

3. Conectarse a MySQL:
```bash
mysql -uroot -psuper-secret-password
```

4. Usar la base de datos:
```sql
USE my-wonderful-website;
```

### Ejemplo: Crear una tabla y consultar datos

```sql
CREATE TABLE Persons (
    PersonID int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
);

INSERT INTO Persons VALUES 
    (1, 'John', 'Doe', '51 Birchpond St.', 'New York'),
    (2, 'Jack', 'Smith', '24 Stuck St.', 'Los Angeles'),
    (3, 'Michele', 'Sparrow', '23 Lawyer St.', 'San Diego');
```

Para consultar estos datos desde PHP, descomenta el código en `app/index.php`.

### Detener los contenedores

```bash
docker-compose down
```

### Detener y eliminar volúmenes (⚠️ elimina los datos)

```bash
docker-compose down -v
```

## 📝 Desarrollo

El directorio `app/` está montado como volumen, por lo que los cambios en los archivos PHP se reflejan inmediatamente sin necesidad de reconstruir los contenedores.

## 🔌 Conexión PHP-MySQL

El archivo `app/index.php` incluye un ejemplo comentado de cómo conectarse a MySQL desde PHP usando PDO. Para usarlo:

1. Descomenta el código en `app/index.php`
2. Asegúrate de que la base de datos y la tabla existen
3. Recarga la página en tu navegador

## 📄 Licencia

Este proyecto está licenciado bajo la Licencia MIT. Ver el archivo [LICENSE](LICENSE) para más detalles.

**Nota especial**: Se recomienda encarecidamente (aunque no es obligatorio) que las obras derivadas mantengan este mismo espíritu de código libre y abierto, especialmente cuando se utilicen con fines educativos o de investigación.

## 👤 Autor

**Migbertweb**

- GitHub: [@migbertweb](https://github.com/migbertweb)
- Repositorio: https://github.com/migbertweb/docker-php-apache-mysql

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Siéntete libre de abrir un issue o enviar un pull request.

## 📚 Recursos Adicionales

- [Documentación de Docker](https://docs.docker.com/)
- [Documentación de Docker Compose](https://docs.docker.com/compose/)
- [Documentación de PHP](https://www.php.net/docs.php)
- [Documentación de MariaDB](https://mariadb.com/kb/en/documentation/)

## ⚠️ Notas de Seguridad

- Este stack está configurado para **desarrollo local únicamente**
- No usar en producción sin ajustar las configuraciones de seguridad
- Cambiar todas las contraseñas por defecto
- Configurar firewall y restricciones de acceso según sea necesario
