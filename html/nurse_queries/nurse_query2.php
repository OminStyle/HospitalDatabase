<?php
	$pid =  $_POST["pid"];
	$roomNumber = $_POST["roomNumber"];
	$address = $_POST["address"];
	$ccn = $_POST["ccn"];
	$pname = $_POST['pname'];
	$age = $_POST['age'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$queueNumber = $_POST['queueNumber'];

	$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');

	$sql = "INSERT INTO Assigned_Patient VALUES (" .$pid. "," .$roomNumber. ",\"" .$address. "\"," .$ccn. ",\"" .$pname. "\"," .$age. "," .$weight. "," .$height. ")";
	echo $sql . "<br>";
	
	$result = mysqli_query($con,$sql);

	if(mysqli_error($con) != NULL) {
		echo mysqli_error($con);
		echo mysqli_errno($con);
	}
	else {
		mysqli_close($con);
		echo "<meta http-equiv=\"refresh\" content=\"1;/HospitalDatabase/html/nurse.php\"><script type=\"text/javascript\">window.location.href = \"/HospitalDatabase/html/nurse.php\"</script>";
	}
	mysqli_close($con);
?>