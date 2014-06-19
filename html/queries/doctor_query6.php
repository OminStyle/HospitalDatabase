<?php

$q = $_GET['q'];

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT PID, PName FROM Assigned_Patient WHERE RoomNumber=" . $q;
$result = mysqli_query($con,$sql);

echo "<table class='table table-bordered table-hover'>
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
