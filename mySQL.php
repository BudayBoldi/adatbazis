<?php
class DBCon {
	private $server = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "test";
	private $database_handle = null;

	public function __construct() {
		$this -> database_handle = new mysqli($this -> server, $this -> user, $this -> password, $this -> database);
	}

	public function GetTable($nq) {
		$result = mysqli_query($this -> database_handle, "SELECT * FROM tabla WHERE NAME='$nq';");

		if (!mysqli_num_rows($result)) {
			echo "<res>Biztos hogy helyesen irtad be?</res>";
		}

		// TODO: $response = json_encode(mysqli_fetch_assoc($result));
		while ($row = mysqli_fetch_assoc($result)) {
			foreach ($row as $key => $val) {
				echo "<res>$key = $val</res> <br>";
			}
		}

		mysqli_free_result($result);
		mysqli_close($this -> database_handle);
	}
	public function WriteTable($nw, $adw, $aw, $del) {
		if(!$del) {
			if(mysqli_query($this -> database_handle, "INSERT INTO tabla VALUES (null, '$nw', '$adw', '$aw');")) {
				echo "Belerakva!";
			} else {
				echo "Hiba: " . mysqli_error($this -> database_handle);
			}

			mysqli_close($this -> database_handle);
		} else {
			if(mysqli_query($this -> database_handle, "DELETE FROM tabla WHERE NAME='$nw';")) {
				echo "Kiszedve!";
			} else {
				echo "Hiba: " . mysqli_error($this -> database_handle);
			}

			mysqli_close($this -> database_handle);
		}
	}
}
?>
