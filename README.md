
# Project Laravel


## Resumen

Aplicación web realizada con laravel.
Cuenta con 3 CRUD pertenecientes a las entidades siguientes:

 - Usuarios
 - Libros
 - Pedidos
 
 Tambíen cuenta con un Login con Roles de usuarios de tipo administrador y estudiante.
 
 - Cuenta para acceder como administrador:
       - Email: `admin@admin.admin`
       - Cotraseña: `admin` 
  - Cuenta para acceder como estudiante:
       - Email: `estudiante@estudiante.estudiante`
       - Cotraseña: `estudiante` 

 

## Pasos para lanzar la aplicación web

  

1. Instalar las dependencias de composer con `composer install`

2. Copiamos el archivo .env.example y creamos un .env, luego le añadimos los datos de nuestra base de datos

3. Generamos una nueva Key de la aplicación con `php artisan key:generate`

4. Generamos una nueva JWT key secreta con `php artisan jwt:generate`

5. Ejecutamos la migraciones de la Base de datos con `php artisan migrate`

6. Ejecutamos las semillas de la Base de datos con `php artisan migrate --seed`

7. Lanzamos el servidor local con `php artisan serve`

8. Por último accedemos desde el navegador a `http://localhost:8000/`
9. Ahora nos aparecerá el login y debemos iniciar sesión con el rol preferido admin o estudiante, si las credenciales son correctas nos redirigirá a un menú en el cual podemos seleccionar a que entidad queremos ir. 
*Et voilá !*

> Ricardo Cabrera
