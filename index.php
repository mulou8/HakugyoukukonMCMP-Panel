<?php
use HakugyokuSoulMVC\HakugyokuSoulMVC;

/**************************************************
 * ProjectName  HakugyokuSoulMVC[白玉魂MVC框架]   *
 *  										 	  *
 * Author       SaigyoujiYuyuko 				  *
 * QQ           3558168775 				          *
 *                                 			      *
 * MvcVersion   1.1.3            		          *
 * BaseVersion  1.1.2            			      *
 * SqlVersion   1.1.1              			      *
 *					            			      *										
 * 声明:            	                  	      *
 * 此框架V1.x.x均为开源版本 其他需付费            *
 * 框架使用 GNU LGPL 协议开源             	      *
 * 本框架不允许修改后付费卖出   	              *
 *		      								      *
 * 使用本框架造成的任何后果与作者无关	          *
 **************************************************/

// 应用目录为当前目录
define('APP_PATH', __DIR__ . '/');

// 是否是开发模式
define('APP_DEBUG',FALSE);

// 加载框架文件
require(APP_PATH . 'HakugyokuSoulMVC/HakugyokuSoulMVC.php');

//内存限制
ini_set('memory_limit', '256');

// 加载配置文件
$config =APP_PATH . 'Conf/Conf.ini';

// 实例化框架类
$MvcClass = new HakugyokuSoulMVC($config);
$MvcClass->Run();