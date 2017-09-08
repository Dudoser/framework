<?php

	namespace app\controllers;

	use app\models\Main;
	

	class MainController extends AppController {

		// public $layout = 'main';
		

		public function indexAction(){


			$model = new Main;
			//$res= $model->query("CREATE TABLE posts2 SELECT * FROM mysql.help_topic");

			$posts =$model->findALL();
			$posts2 =$model->findALL();
			//$post =$model->findOne(21);
			//$data = $model->findBySql("SELECT name FROM posts ORDER BY id DESC ");
			//$data = $model->findBySql("SELECT id, name FROM {$model->table} WHERE name LIKE ? ", ['%la%']);
			$data = $model->findLike('rl', 'name');
			debug($data);

			$title = 'PAGE TITLE';
			$this->set(compact('title', 'posts'));

		}
	}
?>