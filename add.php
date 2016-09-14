<?php

require __DIR__ . './class/image.php';
require __DIR__ . './function/file.php';

if (!empty($_POST)) {

	$data = [];

	if (!empty($_POST['title'])) {
		$data['title'] = $_POST['title'];
	}

	if(!empty($_FILES)) {
		$res = file_upload('image');
		if (false !== $res) {
			$data['image'] = $res;
		}
	}
	if (isset($data['title']) && isset($data['image'])) {
		$image->photo_insert($data);
		header('Location: ./');
		die;
	} 
}

include __DIR__ . './views/add.php';
