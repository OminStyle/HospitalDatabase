<?php
// a disease have by all the patients over 70 years old
$q = $_GET['q'];

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="select 		DISTINCT d.DID, d.DName
from 		Disease d
where		 not exists 
(select *
from Assigned_Patient a
where a.age >= 70 and a.age is not null 
and not exists		(select *
		from Diagnose di
		where di.PID = a.PID and d.DID = di.DID))
order by 	d.DName;";
$result = mysqli_query($con,$sql);

echo "<table class='table table-bordered table-hover'>
<tr>
  <th>Disease ID</th>
  <th>Disease Name</th>
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
