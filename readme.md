### Comados Base
1. Para correr el proyecto \
```php artisan serve```
2. Para actualizar librerias \
````composer update````
3. Para crear las tablas de la DB \
```php artisan migrate```
4. Para eliminar las tablas \
```php artisan migrate:rollback```
5. Para hacer los pasos 4 y 3 juntos \
```php artisan migrate:refresh```
6. Para crear datos ejemplo en las tablas, osea seeds \
```php artisan migrate:refresh --seed```