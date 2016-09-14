<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php include __DIR__ . '/form.php'; ?>

	<table border="1">
		<tr>
			<th>Наименование</th>
			<th>Фото</th>
		</tr>
		<?php foreach ($items as $item): ?>
		<tr>
			<td><?= $item['title']; ?></td>
			<td><img src="<?= $item['path']; ?>" style="max-width: 200px"</td>
		</tr>
		<?php endforeach; ?>
	</table>

</body>
</html>