<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requirements

<ul>
    <li>GIT</li>
    <li>PHP 7.3+</li>
    <li>Composer</li>
</ul>

## How Install Netshow

<ul>
<li> Clone the repository with command <code> git clone https://github.com/maikees/Netshow.git</code> </li>
    <li> Get dependencies from composer using <code> composer install </code> </li>
    <li> Copy the file .env.example to .env</li>
    <li> 
        Configure the database settings with variables, change the name of your database:
        <pre>        
            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=netshowme
            DB_USERNAME=root
            DB_PASSWORD=
        </pre>
    </li>
    <li> 
        Configure the mail settings with variables, change of the your informations:
        <pre>        
            MAIL_MAILER=smtp
            MAIL_FROM_ADDRESS=null
            MAIL_FROM_NAME="${APP_NAME}"
            MAIL_DRIVER=smtp
            MAIL_HOST=mocsolucoes.com.br
            MAIL_PORT=465
            MAIL_USERNAME="contato@mocsolucoes.com.br"
            MAIL_PASSWORD="password"
            MAIL_ENCRYPTION=ssl
        </pre>
    </li>
    <li> 
        Create the variable into .env for receive the mails Notifications
        <pre>        
            MAIL_TO_SEND="maike@mocsolucoes.com.br"
        </pre>
    </li>
    <li> Using a database migrates with command <code> php artisan migrate </code> </li>
    <li> Execute the project with command <code> php artisan serve </code> </li>
    <li> Test in URL <code> http://127.0.0.1:8000 </code> </li>
</ul>
