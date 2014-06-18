<?php
	$pid =  $_POST["pid"];

	$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');

	$sql = "Delete from Assigned_Patient where PID=" . $pid;
	
	$result = mysqli_query($con,$sql);
	mysqli_close($con);
?>

<meta http-equiv="refresh" content="1;/HospitalDatabase/html/nurse.php">
<script type="text/javascript">
    window.location.href = "/HospitalDatabase/html/nurse.php"
</script>