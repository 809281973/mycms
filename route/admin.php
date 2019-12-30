<?php
//https://www.bbsmax.com/A/ZOJPe9Py5v/ 中间件

Route::group('control', function () {
    Route::get('login', 'Login/index');

})->prefix('admin/');