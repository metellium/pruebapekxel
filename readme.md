<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

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
    
<p>5.-Crear el archivo.env con el comando en PowerShell:</p>
<p>New-Item -Path '.env' -ItemType File</p>

<p>6.-agregar al archivo .env la siguiente informacion:</p><br>
APP_NAME=Laravel<br>
APP_ENV=local<br>
APP_KEY=base64:aDtmwhV/kMDwr6WfdYs9i+eE0sz1O28cmY2Oe3pjTao=<br>
APP_DEBUG=true<br>
APP_URL=http://localhost<br>

LOG_CHANNEL=stack<br>

DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=wabsdeve_vpekxel<br>
DB_USERNAME=root<br>
DB_PASSWORD=''<br>

BROADCAST_DRIVER=log<br>
CACHE_DRIVER=file<br>
SESSION_DRIVER=file<br>
SESSION_LIFETIME=120<br>
QUEUE_DRIVER=sync<br>

REDIS_HOST=127.0.0.1<br>
REDIS_PASSWORD=null<br>
REDIS_PORT=6379<br>

MAIL_DRIVER=smtp<br>
MAIL_HOST=smtp.mailtrap.io<br>
MAIL_PORT=2525<br>
MAIL_USERNAME=null<br>
MAIL_PASSWORD=null<br>
MAIL_ENCRYPTION=null<br>

PUSHER_APP_ID=<br>
PUSHER_APP_KEY=<br>
PUSHER_APP_SECRET=<br>
PUSHER_APP_CLUSTER=mt1<br>

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"<br>
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"<br>
<br>

<p>6.- crear la base de datos en MySQL con la siguiente instrucción:</p>
<p>create database wabsdeve_vpekxel;<br>
use wabsdeve_vpekxel;<br>
create table formulario(id int(5)primary key not null auto_increment, tipo_ciclismo varchar(255)not null, anios int(2) not null, horas int(2) not null, marcas varchar(255)not null);<br></p>
7.- en la consola colocar la instrucción para ejecutar el servidor php:<br>
php artisan serve
