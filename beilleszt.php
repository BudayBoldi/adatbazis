<html>
<head>
	<title>Beilleszt</title>
	<style type="text/css">
		body {
			text-align: center;
			align-content: center;
			background: #f8ad9d
		}
		input[type=text], input[type=date] {
			font-size: xx-large;
			border: 0;
			border-bottom: 2px solid #333;
			background: transparent;
			outline: none
		}
		input[type=date] {
			width: 180px;
		}
		input[type=submit] {
			font-size: xx-large;
			border: 0;
			border-bottom: 2px solid #333;
			background: transparent
		}
	</style>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<input type="text" name="name" placeholder="Neved" required><br>
	<input type="text" name="address" placeholder="Cimed"><br>
	<h3>Sz. eved: <input type="date" name="age">
	<input type="submit" name="edit" value="Ok">
	<input type="submit" name="edit" value="-"></h3>
</form>

<?php
include 'mySQL.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	switch($_REQUEST['edit']) {
  		case 'Ok':
    		$name = htmlspecialchars($_POST['name']);
    		$address = htmlspecialchars($_POST['address']);
    		$age = htmlspecialchars($_POST['age']);
    		$DBCon = new DBCon();
    		$DBCon -> WriteTable($name, $address, $age, false);
    		break;
  		case '-':
    		$name = htmlspecialchars($_POST['name']);
    		$DBCon = new DBCon();
    		$DBCon -> WriteTable($name, null, null, true);
    		break;
	}
}
?>
</body>
</html>
