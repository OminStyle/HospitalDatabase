<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

//mysqli_select_db($con,"hospital");
//$sql="SELECT PID, PName FROM Assigned_Patient WHERE RoomNumber=120";
$sql="SELECT PID, PName FROM Assigned_Patient WHERE RoomNumber='".$q."'";
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
