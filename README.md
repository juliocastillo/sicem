sicem
=====

A Symfony project created on January 27, 2017, 7:18 pm.

#CREAR PROYECTO SICEM
$ symfony new sicem

#CREAR CARPETA PARA VARIABLES TEMPORALES
$ mkdir var/sessions/dev

#DAR PERMISOS A LAS CARPETAS DE ARCHIVOS TEMPORALES
$ setfacl -R -m u:www-data:rwx -m u:`whoami`:rwx var/cache var/sessions/dev
$ setfacl -dR -m u:www-data:rwx -m u:`whoami`:rwx var/cache var/sessions/dev

#CREAR USUARIO Y BASE DE DATOS EN POSTGRES
createuser -DRSP sicem
createdb sicem -O sicem

#INSTALACION DE COMPOSER
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '55d6ead61b29c7bdee5cccfb50076874187bd9f21f65d8991d46ec5cc90518f447387fb9f76ebae1fbbacf329e583e30') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"


