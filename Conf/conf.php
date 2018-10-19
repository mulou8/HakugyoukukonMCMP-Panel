<?php
	$config['web']['title'] = "白玉魂MC面板";	//网站标题
	
	$config['db']['host'] = "127.0.0.1";
	$config['db']['username'] = "root";
    $config['db']['password'] = "xixi0219";
    $config['db']['dbname'] = "ymcp";
    $config['db']['port'] = "3306";
    
    // 默认控制器和操作名
	$config['mvc']['defaultController'] = 'Main'; //切记不能加Controller
	$config['mvc']['defaultAction'] = 'Show';
	$config['mvc']['key'] = "SaigyoujiYuyuko-HakugyokuSoulMVC&HMCP::2018107100337";
    
    return $config;
