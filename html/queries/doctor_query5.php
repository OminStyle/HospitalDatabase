<?php
// a disease have by all the patients over 70 years old
$q = $_GET['q'];

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT DISTINCT di.DID, di.DName
FROM Diagnose d, Disease di
WHERE d.DID = di.DID
AND d.PID NOT IN (SELECT    a.PID
                FROM    Assigned_Patient a
                WHERE   a.age < 70)";
$result = mysqli_query($con,$sql);

echo "<table class='table table-bordered table-hover'>
<tr>
  <th>Disease ID</th>
  <th>Disease Name</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['DID'] . "</td>";
  echo "<td>" . $row['DName'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
