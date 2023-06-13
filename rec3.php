<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>テンプレ</title>
</head>

<body>
	<?php
	// h()の定義をする
	require_once '_h.php';
	$rec = $_POST['kotae'];
	print h($rec);
	print '<br>';
	?>
</body>

</html>