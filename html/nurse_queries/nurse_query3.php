<?php
	$pid =  $_POST["pid"];

	$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');

	$sql = "Delete from Assigned_Patient where PID=" . $pid;
	
	$result = mysqli_query($con,$sql);

	if(mysqli_error($con) != NULL) {
		echo $sql . "<br>";
		echo mysqli_error($con) . "<br>";
		echo "Error Number: " . mysqli_errno($con);
	}
	else {
		mysqli_close($con);
		echo "<meta http-equiv=\"refresh\" content=\"1;/HospitalDatabase/html/nurse.php\"><script type=\"text/javascript\">window.location.href = \"/HospitalDatabase/html/nurse.php\"</script>";
	}
	mysqli_close($con);
?>