<?php
	include '../session.php';
	include '../header.php';
    include '../menu.php';
?>

<h1>スタッフ追加</h1>
<form method="post" action="staff_add_check.php">
スタッフ名を入力してください。<br />
<input type="text" name="name" style="width:200px"><br />
パスワードを入力してください。<br />
<input type="password" name="pass" style="width:100px"><br />
パスワードをもう１度入力してください。<br />
<input type="password" name="pass2" style="width:100px"><br />
<br />
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="OK">
</form>

<?php
    include '../footer.php';
?>