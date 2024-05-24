html>
<head>
	<title>Beilleszt</title>
	<style type="text/css">
		body {
			text-align: center;
			align-content: center;
			background: #f8ad9d
		}
		input[type=text], input[type=date] {
			font-size: large;
			border: 0;
			border-bottom: 2px solid #333;
			background: transparent;
			outline: none
		}
		input[type=date] {
			width: 180px;
		}
		input[type=submit] {
			font-size: large;
			border: 0;
			border-bottom: 2px solid #333;
			background: transparent
		}
	</style>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<h3>Neved: <input type="text" name="name" required></h3>
	<h3>Hely: <input type="text" name="address"></h3>
	<h3>Kor: <input type="date" name="age">
	<input type="submit" value="Ok"></h3>
</form>

<?php
include 'mySQL.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $address = htmlspecialchars($_POST['address']);
  $age = htmlspecialchars($_POST['age']);
  $DBCon = new DBCon();
  $DBCon -> WriteTable($name, $address, $age);
}
?>
</body>
</html>
