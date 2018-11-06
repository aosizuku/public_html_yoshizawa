<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>よしざわ農園</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php

    try {
		include '../database.php';
		$sql = 'SELECT code, name, price FROM mst_product WHERE 1';
		$stmt = $dbh->prepare($sql);
		$stmt->execute();

		$dbh = null;

		print '<h1>商品一覧</h1>';

		print '<form method="post" action="pro_branch.php">';
		while(true)
		{
			$rec = $stmt->fetch(PDO::FETCH_ASSOC);
			if($rec == false)
			{
				break;
			}
			print '<label for="'.$rec['code'].'"><input type="radio" name="procode" value="'.$rec['code'].'" id="'.$rec['code'].'" >';
			print $rec['name'].'---';
			print $rec['price'].'円';
			print '</label><br />';
		}
		print '<input type="submit" name="disp" value="参照">';
		print '<input type="submit" name="add" value="追加">';
		print '<input type="submit" name="edit" value="修正">';
		print '<input type="submit" name="delete" value="削除">';
		print '</form>';

	} catch(Exception $e) {
		print('ただいま障害により大変ご迷惑をお掛けしております。');
		exit();
	}

?>

</body>
</html>