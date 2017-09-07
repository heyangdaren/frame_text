<?php 
	namespace core\view;

	class View{
		// 如果实例化当前类，使用‘->’方式调用的方法找不到的时候，自动触发
		public function __call($name, $arguments){
			return self::parseAction($name, $arguments);
		}

		// 如果实例化当前类，使用‘::’方式调用的方法找不到的时候，自动触发
		public function __callStatic(){
			return self::parseAction($name, $arguments);
		}

		public static function parseAction(){
			// 通过该方法实例化Base类，调用$name的方法
			return call_user_func_array([new Basc(),$name], $arguments);
		}
	}
 ?>