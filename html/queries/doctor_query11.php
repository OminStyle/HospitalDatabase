<?php
	$dname = $_POST["dname"];

	$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');

	$sql = 'DELETE FROM Disease WHERE DName='. "\"" . $dname . "\"";
	
	$result = mysqli_query($con,$sql);

	if(mysqli_error($con) != NULL) {
		echo $sql . "<br>";
		echo mysqli_error($con) . "<br>";
		echo "Error Number: " . mysqli_errno($con);
	}
	else {
		mysqli_close($con);
		echo "<meta http-equiv=\"refresh\" content=\"1;/HospitalDatabase/html/doctor.php\"><script type=\"text/javascript\">window.location.href = \"/HospitalDatabase/html/doctor.php\"</script>";
	}
	mysqli_close($con);
?>