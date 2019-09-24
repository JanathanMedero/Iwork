<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Sistema Iwork

Sistema para el manejo de empleados e historial de los mismos en la empresa Iwork.

## Requerimientos

- **[NodeJs](https://nodejs.org/es/)**
- **[Composer](https://getcomposer.org/)**
- **[Xampp](https://www.apachefriends.org/es/index.html)**

## Instalación

Paso 1:
Descargar o clonar el archivo a tu computadora.

Paso 2:
Descomprimir el archivo zip y mover la carpeta extraída a la ruta de xampp en el directorio htdocs
`C:\xampp\htdocs`

Paso 3:
Iniciar los servicios de apache y mysql desde Xampp

Paso 4:
Abrir el administrador de base de datos Mysql y crear una base de datos con el nombre de iwork

Paso 5:
Ingresar al archivo .env de la raiz del proyecto y modificar los siguentes parametros para conectar a la base de datos que ha creado anteriormente. DB_DATABASE hace referencia al nombre de la base de datos que hemos creado, DB_USERNAME hace referencia al nombre de usuario de nuestra base de datos, DB_PASSWORD hace referencia a la contraseña que tenemos en nuestro administrador de base de datos, en caso de no haber establecido una contraseña, dejar el espacio en blanco.
```
DB_DATABASE=iwork
DB_USERNAME=root
DB_PASSWORD=
```

Paso 6:
Abrir una terminal en el directorio del proyecto y ejecutar el siguiente comando
`php artisan migrate`

Paso 7: 
Ingresar a cualquier navegador y acceder a la siguiente url: http://localhost/iwork/

Paso 8: 
Ingresar con cualquiera de estas credenciales y probar el sistema
```
email: admin1@gmail.com - password: secret1
email: admin2@gmail.com - password: secret2
email: admin3@gmail.com - password: secret3
```
