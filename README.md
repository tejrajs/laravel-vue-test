# Laravel Vue Api test
Test App For Vue &amp; Laravel

## Quick Start

``` bash
# Install Dependencies
composer install

# Install JS Dependencies
npm install

# Create ENV file
cp .env.example .env

# Update Database setting in .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=databasename
DB_USERNAME=user
DB_PASSWORD=password

# Update SMTP setting in .env file
MAIL_DRIVER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=587
MAIL_USERNAME=mailuser
MAIL_PASSWORD=password
MAIL_ENCRYPTION=tls

# Update Facebook App setting in .env file

FACEBOOK_APP_ID=xxxxxxxxxxxx
FACEBOOK_APP_SECRET=xxxxxxxxxxxxxxxxxxxxxxx
FACEBOOK_REDIRECT=https://<app-root>/callback

# Run Migrations
php artisan migrate


# If you get an error about an encryption key
php artisan key:generate


# Watch Files
npm run dev

# Run Serve (If Required)
php artisan serve