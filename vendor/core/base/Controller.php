<?php
	
	namespace vendor\core\base;

	abstract class Controller {

		/*
			текущий маршрут ипараметры (controller,action, params)
		*/

		public $route = [];
		public $view;

		/*
			текущий шаблон
		*/

		public $layout;

		/*
			пользовательские данные
		*/

		public $vars = [];

		public function __construct ($route){
			$this->route = $route;
			$this->view = $route['action'];
		}

		public function getView () {
			$vObj = new View($this->route, $this->layout, $this->view);
			$vObj->render($this->vars);
		}

		public function set($vars){
			$this->vars = $vars;
		}

	}
	
?>