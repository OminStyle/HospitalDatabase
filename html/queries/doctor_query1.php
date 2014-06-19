<?php
// medicines/drugs are associated with specific treatment
$q = $_GET['q'];

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM Take WHERE TName='".$q."'";
$result = mysqli_query($con,$sql);

echo "<table class='table table-bordered table-hover'>
<tr>
  <th>Treatment Name</th>
  <th>Medicine Name</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['TName'] . "</td>";
  echo "<td>" . $row['MName'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
