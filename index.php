<?php

require_once __DIR__.'/sql.php';

Class image {
	public $title;
	public $sql;
 	
 	// Конструктор подключается к БД
 	public	function __construct() {
 		mysql_connect('localhost','root','');
 		mysql_select_db('gallery');	
 	}

 	// Метод выполняет запрос к БД
 	public function sql_query($sql) {
 		$res = mysql_query($sql);
 		$ret = [];

 		while(false !== ($row = mysql_fetch_assoc($res))) {
 			$ret[] = $row;
 		}

 		return $ret;
 	} 

 	public function photo_getAll() {
 		
 	}

 	public function photo_add() {

 	}

 	public function photo_update() {

 	}

 	public function photo_delete() {

 	}
}

$image = new image(sql_connect());
$image->sql_query('SELECT * FROM image');

?>