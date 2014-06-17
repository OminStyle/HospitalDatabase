<?php
	$pid =  $_POST["pid"];

	$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');

	// INSERT INTO Assigned_Patient VALUES (34, 3, NULL, 1220, “Taylor Fisher”, 45, NULL, 170);
	$sql = "Delete from Assigned_Patient where PID =" . $pid;
	
	$result = mysqli_query($con,$sql);
	mysqli_close($con);
?>

<meta http-equiv="refresh" content="1;/HospitalDatabase/html/nurse.php">
<script type="text/javascript">
	alert('You have entered a new patient.')
    window.location.href = "/HospitalDatabase/html/nurse.php"
</script>