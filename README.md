## PETSHOP


## ======= ADMIN =======

- Funciones y permisos de administrador
- Gestor de productos
- Gestor de medios usando unisharp laravel file manager
- Gestor de banners
- Gestión de pedidos
- Gestión de categorías
- Gestión de marcas
- Gestión de envíos
- Gestión de reseñas
- Gestión de blogs, categorías y etiquetas
- Gestión de usuarios
- Gestión de cupones
- Configuración del sistema: configuración de correo electrónico, tienda de información, mantener el estado,...
- Gráfico de líneas y gráfico circular ...
- Generar orden en formato pdf ...
- Mensajes y notificaciones en tiempo real
- Configuración del perfil
Muchos más....


## ======= PANEL DE CONTROL DEL USUARIO =======

- Gestión de pedidos
- Gestión de revisiones
- Gestión de comentarios
- Configuración del perfil

### levantamiento del proyecto :

1. Clonar el repositorio
2. En la terminal ```composer install```

3. Renombre y copie ```.env.example``` en el archivo ``.env``
4. php artisan key:generate
5. Establece las credenciales de la base de datos en el archivo ``.env``.
6. Establece tus credenciales de Braintree en tu archivo ```.env`` si quieres utilizar PayPal
7. Importar el archivo de db(```database/e-shop.sql```)
8. ```npm install```
9. ```npm run watch```
10. ```php artisan storage:link```
11. Edit ```.env``` file :- remove APP_URL
10. ```php artisan serve```
11. Ingrese a ```localhost:8000``` en el navegador de su preferencia
12. Visite /admin si desea acceder al panel de administración. 
13. Credenciales
- Admin (Email/Password): ```admin@gmail.com```/```1111```. 
- Usuario (Email/Password): ```user@gmail.com```/```1111```

#### Comandos adicionales para solucionar algun error que pueda figurar

- composer dump-autoload
- composer update --no-scripts
- composer require srmklive/paypal:~1.0
- php artisan vendor:publish --provider "Srmklive\PayPal\Providers\PayPalServiceProvider"
- composer dump-autoload
- composer install
- php artisan cache:clear
- php artisan config:clear
- php artisan optimize
- php artisan clear-compiled


**Estructura del storage**

La siguiente estructura debe estar presente en caso no se genere automaticamente debera crearse manualmente

- `storage`
    - `framework`
        - `#cache`
        - `#sessions`
        - `#views`
    - `logs`

