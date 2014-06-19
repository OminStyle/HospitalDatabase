<?php

$q = $_GET['q'];

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT PID, PName FROM Assigned_Patient WHERE RoomNumber=" . $q;
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

if(mysqli_error($con) != NULL) {
	echo $sql . "<br>";
	echo mysqli_error($con) . "<br>";
	echo "Error Number: " . mysqli_errno($con);
}

mysqli_close($con);
?>
