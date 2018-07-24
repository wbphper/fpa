<?php
return [

    /* 数据库设置 */
    'DB_TYPE'                => 'mysql',       // 数据库类型
    'DB_HOST'                => 'localhost',   // 服务器地址
    'DB_NAME'                => 'fpa', // 数据库名
    'DB_USER'                => 'root',        // 用户名
    'DB_PWD'                 => 'root',            // 密码
    'DB_PORT'                => '3306',        // 端口
    'DB_PREFIX'              => 'wj_',      // 数据库表前缀

    /* 全局系统变量 */
    'TMPL_PARSE_STRING'  => [

        '__CSS__'    => __ROOT__ . '/Public/css',
        '__JS__'     => __ROOT__ . '/Public/js',
        '__IMAGE__'  => __ROOT__ . '/Public/images',
        '__QRCODE__' => __ROOT__ . '/Public/qrcode',
    ],
];
