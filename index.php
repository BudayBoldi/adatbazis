<form method="POST" action="#">
	Neved: <input type="text" name="name">
	<input type="submit" value="Ok">
</form>

<?php
include 'mySQL.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $DBCon = new DBCon();
  $DBCon -> GetTable($_POST['name']);
}
?>
