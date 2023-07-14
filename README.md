# LaravelAuthentication 
###### Laravel v8.83.27 (PHP v7.3.0)
##### A project that implements registration, authorization, and password recovery and confirmation for users, using Laravel.
##### The application is built on Laravel, using Bootstrap 5.

###### The project was created to consolidate knowledge in PHP, Laravel (controllers, migrations, sessions, Blade templates), Bootstrap 5.
###### ----------------------
###### During the project, I worked on user authentication, creating Laravel modules such as controllers, and performing migrations using the php artisan migrate(rollback) command. I familiarized myself with Laravel's authentication session, registration, login, email verification, and password confirmation.

###### When writing code, I adhered to the principles of clean code, followed the "Actions Handled By Resource Controller" conventions for controllers, utilized dependency injection (DI) in routes and controller methods, and applied other modern development approaches.


## Install

- Clone repository ```https://github.com/Haru-ri/LaravelAuthentication.git```
- Navigate to the project directory
- Copy and rename **.env.example** to **.env** and changes, mail service for example - https://mailtrap.io
<pre>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
</pre>
- Migrate tables to the database: **php artisan migrate**

## Usage

- Using the built-in development server: **php artisan serve**
- Open a web browser at the URL given after launch

### Video presentation 
[Link to Youtube](https://youtu.be/JC02nATdpVs)
