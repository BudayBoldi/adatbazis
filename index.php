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

	public function GetTable() {
		$result = mysqli_query($this -> database_handle, "SELECT * FROM tabla WHERE ID=1;");

		while ($row = mysqli_fetch_assoc($result)) {
			foreach ($row as $key => $val) {
				echo "$key = $val <br>";
			}
		}

		mysqli_free_result($result);
		mysqli_close($this -> database_handle);
	}
}

$DBCon = new DBCon();
$DBCon -> GetTable();
?>
