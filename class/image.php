<?php
require_once __DIR__ . '/../var_dump.php';

Class image {
 	
 	// Конструктор подключается к БД
 	public	function __construct() 
 	{
 		mysql_connect('localhost','root','');
 		mysql_select_db('gallery');	
 	}

 	// Создает массив данных таблицы $sql БД
 	public function sql_query($sql) 
 	{
 		$res = mysql_query($sql);
 		$ret = [];

 		while(false !== ($row = mysql_fetch_assoc($res))) 
 		{
 			$ret[] = $row;
 		}

 		return $ret;
 	} 

 	// Обычный запрос к БД
	public function sql_exec($sql)
	{	
		return mysql_query($sql);
	}

 	// Получение всех фотографий из таблицы из БД
 	public function photo_getAll() 
 	{
 		$photo_image = 'SELECT * FROM image';
 		return $this->sql_query($photo_image);	
 	}

 	// Добавление фотографии в БД
 	public function photo_insert($data)
 	{
 		$sql = "
 				INSERT INTO image
 				(title, path)
 				VALUES
 				('" . $data['title']."', '" . $data['image'] . "')
 				";
  		return $this->sql_exec($sql);
 	}


 	public function photo_update() 
 	{
 		
 	}

 	public function photo_delete() 
 	{

 	}
}

$image = new image();