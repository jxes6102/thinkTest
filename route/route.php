<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');

Route::get('/about/gg1', 'about/index/index');

Route::get('/about/gg2', 'about/index/sayhi');

Route::get('/about/user', 'about/index/user');

Route::post('/about/create', 'about/index/create');

Route::get('/about/list', 'about/index/all');

Route::get('/about/:id', 'about/index/select');

return [

];
