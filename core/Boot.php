<?php 
	// 命名空间，一般类似文件的路径
	namespace core;
	class Boot{

		// 默认启动方法(在public的index.php中使用::调用的方法，故在此使用静态方法)
		public static function run(){
			// 默认启动的实例化控制器方法
			self::apprun();
		}

		public static function apprun(){
			// m 代表模块（前台和后台）
			// c 代表控制器
			// a 代表方法
			// 以get过来的参数对控制器和方法进行分配
			if (isset($_GET['s'])) {
				// 如果存在get参数中的s，s为字符串类型，需要使用expoode方法将字符串切割成为数组
				// p($_GET['s']);
				// 将切割后的结果储存起来
				$info = explode('/', $_GET['s']);
				p($info);
				// 定义模块变量
				$m = $info[0];
				// 定义控制器变量
				$c = ucfirst($info[1]);
				// 定义方法变量
				$a = $info[2];
			}else{
				// 如果不存在get参数中的s，就调用默认模板的控制器和方法
				// 默认的模板变量
				$m = 'home';
				// 默认的控制器变量
				$c = 'Index';
				// 默认的方法变量
				$a = 'index';
			}
			// 定义常量
			// 定义模块常量
			define('MODULE', $m);
			// 定义控制器常量(strtolower将字符串转为小写)
			define('CONTROLLER', strtolower($c));
			// 定义方法的常量
			define('ACTION', $a);
			// 组合带命名空间的类名称
			// 例如需要实例化的类如：app\home\controller\某个类
			$class = "app\\{$m}\controller\\{$c}";
			// 实例化$class，执行里面的$a方法
			echo call_user_func_array([new $class,$a], []);
		}

	}
 ?>