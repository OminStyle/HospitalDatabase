<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

//mysqli_select_db($con,"hospital");
//$sql="SELECT DID, DName FROM Disease WHERE DName='HIV'";
$sql="SELECT d.DID, d.DName 
      FROM Disease d
      WHERE d.DName='".$q."'";
$result = mysqli_query($con,$sql);

echo "<table class='table table-bordered table-hover'>
<tr>
  <th>Disease Index</th>
  <th>Disease</th>
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
