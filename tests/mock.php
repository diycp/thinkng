<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 测试入口文件
    $_SERVER['REQUEST_METHOD'] = 'GET';
// 定义项目测试基础路径
    define('TEST_PATH', __DIR__ . '/');
// 定义项目路径
    define('APP_PATH', __DIR__ . '/webapp/');
// 开启调试模式
    define('APP_DEBUG', true);
// 关闭应用自动执行
    define('APP_AUTO_RUN', false);
    include __DIR__ . '/../vendor/autoload.php';
// 加载框架引导文件
    require __DIR__ . '/../src/think.php';
    Think\ClassLoader\Loader::addNamespace('tests', TEST_PATH);
