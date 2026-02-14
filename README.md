
# Dxp-Shop

## Requisitos

- PHP 8.2
- Composer
- MySQL 8.0

## Instalación

    composer install
    cp .env.example .env
    php artisan storage:link
    php artisan key:generate
    php artisan permission:cache-reset

### Configurar la base de datos en el archivo .env

1. Sqlite

        DB_CONNECTION=sqlite

2. Mysql


        DB_CONNECTION=mysql
        DB_HOST=localhost
        DB_PORT=3306
        DB_DATABASE=dxp-shop
        DB_USERNAME=root
        DB_PASSWORD=


### Ambiente productivo

1. Actualizar el archivo .env

        APP_ENV=production
        APP_DEBUG=false
        APP_URL=https://dxp-shop.example.com
        DEBUGBAR_ENABLED=false

2. Inicializar la base de datos


        php artisan migrate


### Ambiente de desarrollo

1. Actualizar el archivo .env

        APP_ENV=local
        APP_DEBUG=true
        APP_URL=http://localhost:8000
        DEBUGBAR_ENABLED=true

2. Inicializar la base de datos

        php artisan migrate:fresh --force 


### Rol administrador filament

1. ejecutar el siguiente comando para crear un usuario administrador

        php artisan make:filament-user

2. Ingresar los datos solicitados
3. Iniciar el servidor de desarrollo

        php artisan serve

4. Acceder a la ruta http://localhost:8000/admin e iniciar sesión con el usuario creado

### Ambiente de pruebas

1. Actualizar el archivo .env

        APP_ENV=testing
        APP_DEBUG=true
        APP_URL=https://dxp-shop.pruebas.example.com
        DEBUGBAR_ENABLED=false

2. Inicializar la base de datos
        php artisan db:seed --class=UsersDemoSeeder