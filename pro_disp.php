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
		//try {

			$pro_code = $_GET['procode'];

			include 'database.php';
			$sql = 'SELECT name, price, gazou FROM mst_product WHERE code = ?';
			$stmt = $dbh->prepare($sql);
			$data[] = $pro_code;
			$stmt->execute($data);

			$rec = $stmt->fetch(PDO::FETCH_ASSOC);
			$pro_name = $rec['name'];
			$pro_price = $rec['price'];
			$pro_gazou_name = $rec['gazou'];

			$dbh = null;

			if($pro_gazou_name == '') {
				$disp_gazou = '';
			} else {
				$disp_gazou = '<img src="./gazou/'.$pro_gazou_name.'">';
			}
			
        /*}
        catch(Exception $e){
            print('ただいま障害により大変ご迷惑をお掛けしております。');
            exit();
        }*/
	?>
	商品情報参照<br />
	<br />
	商品コード<br />
	<?php print $pro_code; ?>
	<br />
	商品名<br />
	<?php print $pro_name; ?>
	<br />
	価格<br />
	<?php print $pro_price; ?>円
	<br />
	<?php print $disp_gazou; ?>
	<br />
	<br />
	<form>
	<input type="button" onclick="history.back()" value="戻る">
	</form>
</body>
</html>