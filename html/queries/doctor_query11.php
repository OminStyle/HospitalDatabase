<?php
	$dname = $_POST["dname"];

	$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');

	$sql = 'DELETE FROM Disease WHERE DName=' . $dname;
	echo $sql;
	
	$result = mysqli_query($con,$sql);
	mysqli_close($con);
?>

<meta http-equiv="refresh" content="1;/HospitalDatabase/html/nurse.php">
<script type="text/javascript">
    // window.location.href = "/HospitalDatabase/html/doctor.php"
</script>
?>