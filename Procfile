web: vendor/bin/heroku-php-apache2 public/
release: php artisan migrate --force && php artisan clear-compiled && php artisan route:clear && php artisan route:cache && php artisan page-cache:clear