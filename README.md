# Installation

- composer install
- make .env from .env.example
- php artisan sail up -d

# routes

- / - Стартовая страница
- /login - Страница авторизации
- /register - Страница регистрации
- /dashboard - Страница для авторизированного пользователя

В таблице **auth_logs** хранятся результаты проверок авторизации/регистрации

[Monolog](https://laravel.com/docs/10.x/logging#monolog-channel-customization) - Customizing Monolog For Channels
Laravel

[Laravel Breeze](https://github.com/laravel/breeze) - это минимальная и простая реализация всех функций аутентификации
Laravel
