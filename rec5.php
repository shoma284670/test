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
	if (isset($_POST['checkbox1'])) {
		$checkbox1 = $_POST['checkbox1'];
		print h($checkbox1);
		print '<br>';
	}
	if (isset($_POST['checkbox2'])) {
		$checkbox2 = $_POST['checkbox2'];
		print h($checkbox2);
		print '<br>';
	}
	if (isset($_POST['checkbox3'])) {
		$checkbox3 = $_POST['checkbox3'];
		print h($checkbox3);
		print '<br>';
	}
	?>
</body>

</html>