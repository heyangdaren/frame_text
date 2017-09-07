<?php 
	namespace core\model;

	class Model{
		// 设置一个静态属性
		protected static $config;

		// 如果实例化当前类，使用‘->’方式调用的方法找不到的时候，自动触发
		public function __call(){
			return self::parseAction($name, $arguments);
		}

		// 如果实例化当前类，使用‘::’方式调用的方法找不到的时候，自动触发
		public function __callStatic(){
			return self::parseAction($name, $arguments);
		}

		// 最终指向的方法，来实例化Base控制器的某个方法
		public static function parseAction($name, $arguments){
			// get_called_class():获取静态绑定后的类名；
			$callClass = get_called_class();
			p($callClass);
			die;
				// class foo {
				//     static public function test() {
				//         var_dump(get_called_class());
				//     }
				// }

				// class bar extends foo {
				// }

				// foo::test();
				// bar::test();
				// 以上例程会输出：

				// string(3) "foo"
				// string(3) "bar"

				$info = explode('\\', $callClass);
				// 用$callClass切割成数组之后的最后一个作为表名
				$table = $info[2];
				return call_user_func_array([new Base(self::$config,$table),$name], $arguments);
		}

		// 获取链接数据库的配置项方法
		public static function setConfig($config){
			self::$config = $config;
		}

	}
 ?>