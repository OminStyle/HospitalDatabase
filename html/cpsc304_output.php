<html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<body>

Table: <?php echo $_POST["table_select"]; ?>
<div id="output"></div>

<!-- jQuery functions -->
<script>
	$(document).ready(function() {
		$('#output').append("<?php find_patient() ?>");
	});
</script>
</body>
</html>

<?php
function find_patient() {
	$mysqli = mysqli_connect("localhost", "root", "eece304Rocks!", "hospital");
	// $mysqli = mysqli_connect("localhost", "root", "", "hospital");

	$table = $_POST["table_select"];
	$column_1 = $_POST["column_1"];
	$column_2 = $_POST["column_2"];

	$sql = "SELECT * FROM " . $table;
	$result = mysqli_query($mysqli, $sql);

	while($row = mysqli_fetch_array($result)) {
	  echo $row[$column_1];
	  echo "   ";
	  echo $row[$column_2];
	  echo "<br>";
	}

	/* close connection */
	$mysqli->close();
}
?>
