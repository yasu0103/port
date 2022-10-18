<?php
	session_start();
	header('Expires:');
	header('Cache-Control:');
	header('Pragma:');
	session_regenerate_id(true);
	header('X-FRAME-OPTIONS: SAMEORIGIN');
	$_SESSION['token']=uniqid('',true);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>メインページ</title>
<?php include "css.php"; ?>
	</head>
		<body>
			<h1>メインログインページ</h1>
			<form method="post" action="seisaku_login.php">
				<table>
				<tr><th>名前</th><td><input type="text" name="name" ></td></tr>
				<tr><th>パスワード</th><td><input type="password" name="pass"></td></tr>
				</table>
				<input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
				<input type="submit" value="送信" >
				<input type="reset" value="reset">
		</body>
</html>