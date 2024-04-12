<form method="POST" action="mySQL.php">
	Neved: <input type="text" name="name">
	<input type="submit" value="Ok">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
}
?>
