<?php
<<<<<<< HEAD
	$dname = $_POST["dname"];

	$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');

	$sql = 'DELETE FROM Disease WHERE DName=\"' . $dname . '\"';
	
	$result = mysqli_query($con,$sql);
	mysqli_close($con);
?>

<meta http-equiv="refresh" content="1;/HospitalDatabase/html/nurse.php">
<script type="text/javascript">
	alert('You have deleted a patient.')
    window.location.href = "/HospitalDatabase/html/nurse.php"
</script>
=======
// medicines/drugs are associated with specific treatment
$q = $_GET['q'];

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="
    SELECT	d.DName, Max(a.Age) as oldest
	FROM		Disease d, Assigned_Patient  a, Diagnose di, HospitalStaff h
	WHERE	d.DID = di.DID and a.PID = di.PID and di.HSID = h.HSID
			and h.Experience >= ANY (SELECT 	AVG (h2.Experience)
							FROM		HospitalStaff h2, Doctor do
WHERE	h2.HSID = do.HSID)
	GROUP BY	d.DName";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
  <th>DName</th>
  <th>Max Age</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['DName'] . "</td>";
  echo "<td>" . $row['oldest'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
>>>>>>> df314791e0619055b403e7d47002cf29b799b3e9
