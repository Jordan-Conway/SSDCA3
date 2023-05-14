<p style="background-color:black">

## Movie Review Blog
This is a blog specialising in movie reviews.
It allows users to write blog posts, add movies and like other posts.

## Authors
----
- Jordan Conway
- Martin Zachariasz
- Emmanuel Francis

Based on [this](https://github.com/codewithdary/laravel-8-complete-blog/) template by Code With Dary

----



## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>
•   MariaDB 10.4.27 <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:Jordan-Conway/SSDCA3.git
cd SSDCA3
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```

Seed the tables (optional)
```
php artisan db:seed
```
</p>