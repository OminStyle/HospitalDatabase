<?php

$q = $_GET['q'];
echo $q;

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT PID, PName FROM Assigned_Patient WHERE RoomNumber=" . $q;

$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
  <th>PID</th>
  <th>PName</th>
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
