<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

//mysqli_select_db($con,"hospital");
//$sql="SELECT * FROM Take WHERE TName='Brain Surgery'";
$sql="SELECT * FROM Take WHERE TName='".$q."'";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
  <th>TName</th>
  <th>MName</th>
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