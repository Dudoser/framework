<?php
	require 'rb.php';
	$db = require '../config/config_db.php';
	R::setup($db['dsn'], $db['user'], $db['pass'], $options);
	R::freeze(true);
	R::fancyDebug(TRUE);
	//var_dump(R::testConnection());

	// Create 
	/*$cat = R::dispense('category');
	$cat->title = 'Категория 3 skjdhflahgkpsrhgkp jhwerhfglsajgh awerhweragh sphg kopwrhg oh phsa ogh arsg regl;erjhg l;erhg ;oerhjg poehsr ogp;serhp; o ghi saprogirse phoidjrg[oerisjg[odrjg[esrogjotp]h[sjdfp]ghjopdst
		hsdfgehtrhtr';
	$id = R::store($cat);*/


	/*$cat = R::load('category', 2);
	echo $cat['title'];         // $cat->title*/



	// UPDATE

	/*$cat = R::load('category', 3);
	echo $cat->title . "<br />";
	$cat->title = 'Категория 3';
	R::store($cat);
	echo $cat->title;*/

	/*$cat = R::dispense('category');
	$cat->title = 'Категория 3!!!';
	$cat->id = 3;
	R::store($cat);*/


	// DELETE

	/*$cat = R::load('category', 2);
	R::trash($cat);*/

	//R::wipe('category');

	//$cats = R::findAll('category');
	//$cats = R::findAll('category', 'id > ?', [2]);
	//$cats = R::findAll('category', 'title LIKE ?', ['%cat%']);
	$cat = R::findOne('category', 'id = 2');
	echo "<pre>";

	print_r($cat);


?>