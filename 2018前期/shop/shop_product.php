<?php
	include '../session_guest.php';
	include '../header.php';
	include '../menu_guest.php';

    try {
		$pro_code = $_GET['procode'];

		include '../database.php';
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
			$disp_gazou = '<img src="../product/gazou/'.$pro_gazou_name.'">';
		}
		
	} catch(Exception $e) {
		print('ただいま障害により大変ご迷惑をお掛けしております。');
		exit();
	}
?>

<a href="shop_cartin.php?procode=<?=$pro_code?>">カートに入れる</a>
<br />
<br />

<h1>商品情報参照</h1>
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
<a href="shop_list.php">商品一覧に戻る</a>
</form>

<?php
    include '../footer.php';
?>