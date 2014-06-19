<?php
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

echo "<table class='table table-bordered table-hover'>
<tr>
  <th>Disease</th>
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
