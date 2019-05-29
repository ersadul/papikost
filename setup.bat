@echo off
echo ~ composer install
call composer install
echo ~ npm install
call npm install
echo ~ php artisan migrate
call php artisan migrate
echo ~ php artisan db:seed
call php artisan db:seed
echo setup is done :)
pause
