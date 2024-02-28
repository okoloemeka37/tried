#!/usr/bin/env bash
# echo "Running composer"
# composer install --no-dev --working-dir=/var/www/html
# composer global require hirak/prestissimo

# #composer update

# echo "generating application key..."
# php artisan key:generate --show

# echo "Caching config..."
# php artisan config:cache

# echo "clearing route"
# php artisan route:clear


# echo "Caching routes..."
# php artisan route:cache

# echo "Running migrations..."
# php artisan migrate --force


#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force