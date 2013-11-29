<?php
return array(
    //'配置项'=>'配置值'

    'SHOW_PAGE_TRACE' =>true, // 显示页面Trace信息

    /* 数据库设置 */
    'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => 'localhost', // 服务器地址
    'DB_NAME'               => 'living',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => 'root',          // 密码
    'DB_PORT'               => '',        // 端口
    'DB_PREFIX'             => '',    // 数据库表前缀

    /*Smarty模板的配置*/
    //开启Smarty模板的支持
    //使用的模板引擎名
    'TMPL_ENGINE_TYPE'     => 'Smarty',
    //url不区分大小写
    //'URL_CASE_INSENSITIVE' => true,
    //模板引擎相关的设置
    'TMPL_ENGINE_CONFIG'   => array(
	//是否缓存模板
	'caching'          => false,
	//模板目录
	'template_dir'     => TMPL_PATH,
	//模板编译目录
	'compile_dir'      => CACHE_PATH,
	//缓存目录
	'cache_dir'        => TEMP_PATH,
	//左定界符
	'left_delimiter'   => '{',
	//右定界符
	'right_delimiter'  => '}',
    ),

    /* 模板引擎设置 */
    'TMPL_ACTION_ERROR'     => TMPL_PATH.'dispatch_jump.html', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'   => TMPL_PATH.'dispatch_jump.html', // 默认成功跳转对应的模板文件

);
