<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Enviroment Setup

<b>In Terminal run</b>

#1-Sudo update

#2-install php
sudo apt install -y php php-common php-cli php-gd php-mysqlnd php-curl php-intl php-mbstring php-bcmath php-xml php-zip

#3-install composer
curl -sS https://getcomposer.org/installer | sudo php -- --intall-dir=/usr/bin --filename=composer

#4-Git clone this repo
Git clone https://github.com/ccssaude/sidmat.git
 
#5-Install node modules
npm install

#6-Install your Vendor file run 
composer install

#7-Setup .env file
To setup your .env, kindly duplicate your .env.example file and rename the duplicated file to .env.

#8-Key Generate
php artisan key:generate
