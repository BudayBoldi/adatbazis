<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Neved: <input type="text" name="name">
	<input type="submit" value="Ok">
</form>

<?php
class DBCon {
	private $server = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "test";
	public $database_handle;

	public function __construct() {
		$this -> database_handle = new mysqli($this -> server, $this -> user, $this -> password, $this -> database);
	}

	public function GetTable($nq) {
		$result = mysqli_query($this -> database_handle, "SELECT * FROM tabla WHERE NAME='$nq';");

		if (!mysqli_num_rows($result)) {
			echo "Biztos hogy helyesen irtad be?";
		}

		while ($row = mysqli_fetch_assoc($result)) {
			foreach ($row as $key => $val) {
				echo "$key = $val <br>";
			}
		}

		mysqli_free_result($result);
		mysqli_close($this -> database_handle);
	}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $DBCon = new DBCon();
  $DBCon -> GetTable($name);
}
?>
