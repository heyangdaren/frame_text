<?php 
	namespace core\view;
	class Base{
		// 模板文件变量
		protected $file;
		// 模板参数变量
		protected $var = ['version' => 'HD85'];
		// 加载模板的方法
		public function make(){
			// 例如加载../app/home/view/index/index.php
			$this->file = "../app/".MODULE.'/view/'.CONTROLLER.'/'.ACTION.'.php';
			return $this;
			// 注：只要进行 return $this 时，才能进行链式操作
		}

		// 分配模板参数的方法
		public function with($var){
			$this->vars = $var;
			return $this;
		}

		public function __toString(){ 
			// extract函数将数组的键名变为变量名，键值变为变量值
			extract($this->vars);
			include $this->file;
			return '';
		}

	}
 ?>