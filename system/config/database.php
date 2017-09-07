<?php 
	// 系统配置
	$config = [
		'host' => 'localhost', //设置主机名
		'dbname' => 'stu', //设置表结构名称
		'username' => 'root', //设置链接数据库的账号
		'password' => 'root' //设置链接数据库的密码
	];
	\core\model\Model::setConfig($config);
 ?>