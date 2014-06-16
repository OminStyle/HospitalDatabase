<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','root','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

//mysqli_select_db($con,"hospital");
//$sql="SELECT DID, DName FROM Disease WHERE DName='HIV'";
$sql="SELECT DID, DName FROM Disease WHERE DName='".$q."'";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
  <th>DID</th>
  <th>DName</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['DID'] . "</td>";
  echo "<td>" . $row['DName'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?
