zbr<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. 
<br>
 <p>Requisitos:<br>
 XAMPP<br>
 Composer<br>   
 Editor de texto<br>
 </p><br>
 <p>Instrucciones para el proyecto:<br>
<p>1.- Descargar Composer: https://getcomposer.org/</p><br>
<p>2.- Descargar este repositorio.</p><br>
<p>3.- una vez descargado descomprimes la carpeta y abres la consola en la dirección del proyecto.</p><br>
<p>4.- colocar el siguiente comando para que se instalen todos los paquetes necesarios</p><br>
 <p>composer install</p><br>
    
<p></p>5.-Crear el archivo.env con el comando:

New-Item -Path '.env' -ItemType File
y configurar el archivo .env con la siguiente informacion:

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:aDtmwhV/kMDwr6WfdYs9i+eE0sz1O28cmY2Oe3pjTao=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wabsdeve_vpekxel
DB_USERNAME=root
DB_PASSWORD=''

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

6.- crear la base de datos en MySQL con la siguiente instrucción:

create database wabsdeve_vpekxel;
use wabsdeve_vpekxel;
create table formulario(id int(5)primary key not null auto_increment, tipo_ciclismo varchar(255)not null, anios int(2) not null, horas int(2) not null, marcas varchar(255)not null);

7.- en la consola colocar la instrucción para ejecutar el servido php:
php artisan serve
