<html>
<head>
	<title>Lekerdezes</title>
	<style type="text/css">
		body {
			text-align: center;
			align-content: center;
			background: wheat
		}
		#txt {
			font-size: large;
			border: 0;
			border-bottom: 2px solid #333;
			background: transparent;
			outline: none
		}
		#sub {
			font-size: large;
			border: 0;
			border-bottom: 2px solid #333;
			background: transparent
		}
	</style>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<h3>Neved: <input type="text" ID="txt" name="name">
	<input type="submit" ID="sub" value="Ok"></h3>
</form>

<?php
include 'mySQL.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $DBCon = new DBCon();
  $DBCon -> GetTable($name);
}
?>
</body>
</html>
