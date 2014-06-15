<?php
echo '<form>';
echo '<select name="Take" onchange="showUser(this.value)">';

$con = mysqli_connect('localhost','root','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT h.HSID, h.HName FROM HospitalStaff h, Attend a WHERE a.PID=2 AND 
		a.time='2013-06-01 22:10:45' AND a.HSID=h.HSID";
$result = mysqli_query($con,$sql);
echo '<option value="">Select a time</option>';
while($row = mysqli_fetch_array($result)) {
  echo '<option value="' . $row['HSID'] . '">' . $row['StaffName'] . '</option>';
}

mysqli_close($con);

echo '</select>';
echo '</form>';
?>