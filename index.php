<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>下田篤書店-書籍検索画面</title>
</head>

<body>
	<?php
// aggg

	require_once '_database_conf.php';
	require_once '_h.php';

	try {
		// 載せてるだけ、本来は必要ない
		$db = new PDO($dsn, $dbUser, $dbPass);
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = 'SELECT * FROM booklist';
		$stmt = $db->prepare($sql);
		$stmt->execute();

		$db = null;

		echo '<h1>下田篤の書籍検索サイト</h1><br><br>';

		// booklist01.phpに情報を送る
		echo "<form action='booklist01.php' method='get'>";
		// 書籍名から検索 
		echo "<label for='bookname'>書籍名：</label>
                <input type='text' name='bookname' size='40' placeholder= '書籍名を入力してください'><br>";

		// ジャンルを選択して検索
		echo "<label for= genre>ジャンル：</label>";
		echo "<select name= genre>
				<option value= >ジャンルを選択してください</option>
				<option value= 小説 >小説</option>
				<option value= 学習参考書 >学習参考書</option>
				<option value= 漫画 >漫画</option>
				<option value= スポーツ >スポーツ</option>
				<option value= コンピューター >コンピューター</option>";
		echo "</select><br>";
		echo '<input type="submit" value="検索">';
		
		echo "</form>";
		echo "<br><form method='post' action='history.php'>";
		echo "<input type='submit' name='history' size='60'  value='予約履歴'>";
		echo "</form>";

	} catch (Exception $e) {
		echo 'エラーが発生しました。内容: ' . h($e->getMessage());
		exit();
	}
	?>
</body>

</html>