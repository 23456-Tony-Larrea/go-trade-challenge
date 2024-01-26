# Frontend con Laravel y Ionic

Este repositorio contiene el código fuente para el frontend utilizando Laravel Vite y Ionic Mobile.

## Requisitos

- Node.js y npm: [Descargar e instalar Node.js](https://nodejs.org/)
- Laravel: [Instalación de Laravel](https://laravel.com/docs/8.x/installation)
- Composer: [Instalación de Composer](https://getcomposer.org/download/)
- Ionic CLI: Instalar globalmente con `npm install -g @ionic/cli`

## Configuración del proyecto Laravel

1. Clona el repositorio: `git clone https://tu-repositorio.git`
2. Accede al directorio del proyecto: `cd frontend-laravel`
3. Instala las dependencias de PHP con Composer: `composer install`
4. Copia el archivo de configuración: `cp .env.example .env`
5. Genera una nueva clave de aplicación: `php artisan key:generate`
6. Configura tu base de datos en el archivo `.env`

## Configuración del proyecto Ionic

1. Accede al directorio del proyecto Ionic: `cd frontend-ionic`
2. Instala las dependencias de Node.js: `npm install`
3. Inicia el servidor de desarrollo de Ionic: `ionic serve`

El servidor de desarrollo se iniciará en `http://localhost:8100/`. Puedes acceder a la aplicación desde tu navegador.

## Desarrollo y Depuración

- Para Laravel, utiliza `php artisan serve` para iniciar el servidor de desarrollo en `http://localhost:8000/`.
- Para Ionic, utiliza `ionic serve` para iniciar el servidor en `http://localhost:8100/`.

## Construcción para Producción

### Laravel

1. Compila los assets con Vite: `npm run prod`
2. Publica los assets de Laravel: `php artisan vendor:publish --tag=laravel-vite`

### Ionic

1. Construye la aplicación para producción: `ionic build --prod`

## Contribuciones

Si encuentras errores o mejoras, ¡siéntete libre de contribuir abriendo un problema o enviando un pull request!
