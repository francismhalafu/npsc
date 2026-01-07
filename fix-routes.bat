@echo off
echo Clearing Laravel caches...
php artisan config:clear
php artisan route:clear
php artisan cache:clear
php artisan view:clear
echo Done! Try accessing the admin panel again.
pause
