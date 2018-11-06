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
        $staff_code = @$_GET['staffcode'];

        $staff_code = htmlspecialchars($staff_code, ENT_QUOTES, 'UTF-8');

        include '../database.php';
        $sql = 'SELECT * FROM mst_staff WHERE code=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $staff_code;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $staff_name = $rec['name'];

        $dbh = null;

    } catch(Exception $e) {
        print('ただいま障害により大変ご迷惑をお掛けしております。');
        exit();
    }
?>

<h1>スタッフ情報参照</h1>
スタッフコード<br />
<?=$staff_code?><br /><br />
スタッフ名<br />
<?=$staff_name?><br />
<form>
<input type="button" onclick="history.back()" value="戻る">
</form>

</body>
</html>