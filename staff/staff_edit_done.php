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
        $post = sanitize($_POST);
        $staff_code = @$post['code'];
        $staff_name = @$post['name'];
        $staff_pass = @$post['pass'];

        include '../database.php';
        $sql = 'UPDATE mst_staff SET name=?, password=? WHERE code=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $staff_name;
        $data[] = $staff_pass;
        $data[] = $staff_code;
        $stmt->execute($data);
        
        $dbh = null;

    } catch(Exception $e) {
        print('ただいま障害により大変ご迷惑をお掛けしております。');
        exit();
    }
?>

修正しました。<br /><br />
<a href="staff_list.php">戻る</a>

</body>
</html>