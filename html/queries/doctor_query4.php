<?php
// medicines/drugs are associated with specific treatment
$q = $_GET['q'];

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT DISTINCT a.PID, a.PName FROM Assigned_Patient a, Diagnose d, Disease di
        WHERE d.PID=a.PID AND d.DID = di.DID AND d.DID ='".$q."'
        Order by a.PID";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
  <th>Patient ID</th>
  <th>Patient Name</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['PID'] . "</td>";
  echo "<td>" . $row['PName'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
