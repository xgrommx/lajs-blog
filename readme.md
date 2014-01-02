## Simple blog using AngularJS + Laravel 4 + Twitter Bootstrap
==============================================================
<a href="https://travis-ci.org/><img src="https://travis-ci.org/flakron/lajs-blog.png?branch=master" /></a>

To run the application you need to have composer installed.
Open the terminal, go to the application folder and execute:
~~~
composer install
~~~

It is assumed that the application will run in mysql, but you can choose any database you like that laravel supports.
Initial database credentials are as bellow:
~~~
Database name: blog
User: blog
Password: DR5yuv_sted63bre8u3h_daS_aqE94br
~~~

After the dependencies are installed, you need to migrate the database.
Execute in terminal:
~~~
php artisan migrate --seed
~~~

After this the application should be ready to run.