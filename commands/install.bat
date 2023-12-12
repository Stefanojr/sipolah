@echo off
cd..
composer i
npm i
copy .env.example .env
php artisan key:generate
@pause
