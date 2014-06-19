<?php
// medicines/drugs are associated with specific treatment
$q = $_GET['q'];

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="
    SELECT  d.DName, Max(Stay) as longestStay
    FROM        Disease d, Diagnose di, PatientStay ps
    WHERE   d.DID = di.DID and ps.PID = di.PID
    GROUP BY    d.DName";
$result = mysqli_query($con,$sql);

echo "<table class='table table-bordered table-hover'>
<tr>
  <th>Disease Name</th>
  <th>Longest Stay</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['DName'] . "</td>";
  echo "<td>" . $row['longestStay'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
