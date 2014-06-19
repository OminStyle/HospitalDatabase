<?php
// Find number of patients who is being diagnosed by doctors in the department
$q = $_GET['q'];

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT do.department, Count(di.PID) as numPatient
      FROM Diagnose di, Doctor do
      WHERE di.HSID=do.HSID and do.department='".$q."'
      GROUP BY do.department";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
  <th>Department</th>
  <th>Number of Patients</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['department'] . "</td>";
  echo "<td>" . $row['numPatient'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
