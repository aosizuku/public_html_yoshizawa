<?php
    session_start();
    session_regenerate_id(true);
    if(isset($_SESSION['member_login']) == false) {
        print 'ようこそゲスト様 <a href="member_login.html">会員ログイン</a><br /><br />';
    } else {
		print('ようこそ'.$_SESSION['member_name'].'様 <a href="member_logout.php">ログアウト</a><br /><br />');
    }
?>
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

お客様情報を入力してください。<br />
<form method="post" action="shop_form_check.php">
お名前<br />
<input type="text" name="onamae" style="width:200px"><br />
メールアドレス<br />
<input type="text" name="email" style="width:200px"><br />
郵便番号<br />
<input type="text" name="postal1" style="width:50px">-
<input type="text" name="postal2" style="width:80px"><br />
住所<br />
<input type="text" name="address" style="width:500px"><br />
電話番号<br />
<input type="text" name="tel" style="width:150px"><br />
<br />
<!--<input type="radio" name="chumon" value="chumonkonkai" checked>今回だけの注文<br />
<input type="radio" name="chumon" value="chumontoroku">会員登録しての注文<br />
<br />
※会員登録する方は以下の項目も入力してください。<br />
パスワードを入力してください。<br />
<input type="password" name="pass" style="width:100px"><br />
パスワードをもう1度入力してください。<br />
<input type="password" name="pass2" style="width:100px"><br />
性別<br />
<input type="radio" name="danjo" value="dan" checked>男性<br />
<input type="radio" name="danjo" value="jo">女性<br />
生まれ年<br />
<select name="birth">
<option value="1910">1910年代</option>
<option value="1920">1920年代</option>
<option value="1930">1930年代</option>
<option value="1940">1940年代</option>
<option value="1950">1950年代</option>
<option value="1960">1960年代</option>
<option value="1970">1970年代</option>
<option value="1980" selected>1980年代</option>
<option value="1990">1990年代</option>
<option value="2000">2000年代</option>
<option value="2010">2010年代</option>
</select>
<br />
<br />-->
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="OK"><br />
</form>

</body>
</html>