<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

    /**
     * ThinkPHP 普通模式定义
     */
    return [
        // 命名空间
        'namespace' => [
            'Think'       => LIB_PATH . DS,
            'Behavior'    => LIB_PATH . 'Behavior' . DS,
            'Traits'      => LIB_PATH . 'Traits' . DS,
            APP_NAMESPACE => APP_PATH,
        ],

        // 配置文件
        'config'    => THINK_PATH . '/src/Util/convention' . EXT,

        // 别名定义
        'alias'     => [
            'Think\App'                  => CORE_PATH . 'App' . EXT,
            'Think\Build'                => CORE_PATH . 'Build' . EXT,
            'Think\Cache'                => CORE_PATH . 'Cache' . EXT,
            'Think\Config'               => CORE_PATH . 'Config' . EXT,
            'Think\Controller'           => CORE_PATH . 'Controller' . EXT,
            'Think\Cookie'               => CORE_PATH . 'Cookie' . EXT,
            'Think\Db'                   => CORE_PATH . 'Db' . EXT,
            'Think\Debug'                => CORE_PATH . 'Debug' . EXT,
            'Think\Error'                => CORE_PATH . 'Error' . EXT,
            'Think\Exception'            => CORE_PATH . 'Exception' . EXT,
            'Think\Hook'                 => CORE_PATH . 'Hook' . EXT,
            'Think\Input'                => CORE_PATH . 'Input' . EXT,
            'Think\Lang'                 => CORE_PATH . 'Lang' . EXT,
            'Think\Log'                  => CORE_PATH . 'Log' . EXT,
            'Think\Model'                => CORE_PATH . 'Model' . EXT,
            'Think\Response'             => CORE_PATH . 'Response' . EXT,
            'Think\Route'                => CORE_PATH . 'Route' . EXT,
            'Think\Session'              => CORE_PATH . 'Session' . EXT,
            'Think\Template'             => CORE_PATH . 'Template' . EXT,
            'Think\Url'                  => CORE_PATH . 'Url' . EXT,
            'Think\View'                 => CORE_PATH . 'View' . EXT,
            'Think\Db\Driver'            => CORE_PATH . 'Db' . DS . 'Driver' . EXT,
            'Think\View\Driver\Think'    => CORE_PATH . 'View' . DS . 'Driver' . DS . 'Think' . EXT,
            'Think\Template\Driver\File' => CORE_PATH . 'Template' . DS . 'Driver' . DS . 'File' . EXT,
            'Think\Log\Driver\File'      => CORE_PATH . 'Log' . DS . 'Driver' . DS . 'File' . EXT,
            'Think\Cache\Driver\File'    => CORE_PATH . 'Cache' . DS . 'Driver' . DS . 'File' . EXT,
        ],
    ];
