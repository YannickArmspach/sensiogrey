composer install --prefer-dist --no-progress --no-ansi --no-interaction
php bin/console make:migration
php bin/console doctrine:migrations:migrate --no-interaction
php bin/console cache:clear
yarn --cwd linotype/Theme/Default/webpack install
yarn --cwd linotype/Theme/Default/webpack build