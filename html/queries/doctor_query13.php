<?php
	$pid =  $_POST["pid"];
	$hsid = $_POST["hsid"];
	$did = $_POST["did"];

	$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');

	$sql = "INSERT INTO Diagnose VALUES (" .$pid. "," .$hsid. "," .$did. ")";

	$result = mysqli_query($con,$sql);

	if(mysqli_error($con) != NULL) {
		echo $sql . "<br>";
		echo mysqli_error($con) . "<br>";
		echo "Error Number: " . mysqli_errno($con);
	}
	else {
		echo $sql . "<br>";
		mysqli_close($con);
		echo "<meta http-equiv=\"refresh\" content=\"1;/HospitalDatabase/html/doctor.php\"><script type=\"text/javascript\">window.location.href = \"/HospitalDatabase/html/doctor.php\"</script>";
	}
	mysqli_close($con);
?>
