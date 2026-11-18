<!-- Create New Project -->
composer create-project codeigniter4/appstarter p9-akademik-ci4 --no-dev

<!-- Copy .env File -->
cp env .env

<!-- Show All Commands -->
php spark -h

<!-- Run a Project -->
php spark serve

<!-- Show PHP Version -->
php -v

<!-- Show Composer Version -->
composer --version

<!-- Show Loaded PHP Modules -->
php -m

<!-- Create a New Controller -->
php spark make:controller DashboardController