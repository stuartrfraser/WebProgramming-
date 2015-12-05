<!DOCTYPE HTML PUBLIC "-//W3C//DTD
<?php
$db = new PDO('mysql:dbname=f28wp;host=mysql-server-1;charset=utf8', 'f28wp','f28wp2015') or die("bye");
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$id = rand(1,6);

$SQL = $db->prepare("SELECT name FROM twitteraccounts");
$result = $SQL->execute();
echo var_dump($result);

//$ins = $db->query("INSERT INTO `f28wp`.`amigos` (`id`, `name`, `photo`) VALUES ('0', 'scott', 'djdjd.gif')");
//print_r($result);
?>


<html>

	<head>
		<title>PHP in HTML Example</title>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
	</head>
	
	<body>

	</body>
	
	
	
</html>