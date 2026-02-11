
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


        php artisan migrate --force --seeder=InitialSeeder 


### Ambiente de desarrollo

1. Actualizar el archivo .env

        APP_ENV=local
        APP_DEBUG=true
        APP_URL=http://localhost:8000
        DEBUGBAR_ENABLED=true

2. Inicializar la base de datos

        php artisan migrate:fresh --force --seeder=DemoSeeder

### Ambiente de pruebas

1. Actualizar el archivo .env

        APP_ENV=testing
        APP_DEBUG=true
        APP_URL=https://dxp-shop.pruebas.example.com
        DEBUGBAR_ENABLED=false

2. Inicializar la base de datos
        php artisan db:seed --class=UsersDemoSeeder