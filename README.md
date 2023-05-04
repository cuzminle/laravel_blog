<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<h3>Данный проект представляет из себя небольшой блог, где реализованый такие функции как:</h3>

<ul>
    <li>Работа с постами, тегами и категориями <br>
        (между постами и тегами созданы отношения многие ко многим, <br> 
        а между постами и категориями созlаны отношения один ко многим) <br>
        http/controllers/PostController.php <br>
        Models/ <br>
        http/Requests/ <br>
    </li>
    <li>фильтрация постов <br>
        http/Filters/ <br>
        http/Requests/Post/FilterRequest.php <br>
        Models/traits/filterable.php
    </li>
    <li>разделение пользователей на администратора и пользователя, <br>
        (В качестве админ панели использавалась AdminLTE) <br>
        http/Controllers/AdminController.php <br>
        http/Policies/AdminPolicy.php <br>
        http/middleware/AdminPanelMiddleware.php
    </li>
    <li>rest api
        (в качестве защиты данных использовался JWT Token) <br>
        models/User.php <br>
        config/auth.php <br>
        http/Controllers/AuthController.php <br>
        http/Resources/ <br>
        routes/api.php <br>
    </li>
</ul>

