<form method="POST" action="#">
	Neved: <input type="text" name="name" style="font-size: large; border: 0; border-bottom: 2px solid #333; outline: none">
	<input type="submit" value="Ok" style="font-size: large; border: 0; border-bottom: 2px solid #333; background: transparent">
</form>

<?php
include 'mySQL.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $DBCon = new DBCon();
  $DBCon -> GetTable($name);
}
?>
