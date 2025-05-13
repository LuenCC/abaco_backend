
## Configuraciones
php artisan make:model LoanRequest -rmf

php artisan migrate:fresh --seed

## Docker comandos

docker-compose -f docker-compose.yml up --build

## Librerias
Libreria corrector de estilo de código

./vendor/bin/pint