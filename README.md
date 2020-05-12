Crear tablas con `php artisan make:model [name] -a`
Esto crea el modelo, migraciones, controladores y seeders

Cuando tengamos listas y configuradas las migraciones en databases/migrations y los modelos en App/ debemos correr las migraciones para que estas creen las tablas y relaciones: `php artisan migrate`
Ver rutas `php artisan route:list`
