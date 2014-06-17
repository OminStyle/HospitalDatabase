<?php
// medicines/drugs are associated with specific treatment
$q = $_GET['q'];
echo '<b>Make a selection:</b>
<form>
<select name="Query3" onchange="showData(this.value, this.name)">';

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT PID from Assigned_Patient ";
$result = mysqli_query($con,$sql);
echo '<option value="">Select a patient ID:</option>';
while($row = mysqli_fetch_array($result)) {
  echo '<option value="' . $row['PID'] . '">' . $row['PID'] . '</option>';
}

mysqli_close($con);

echo "</select>
</form>
<br>
      <div id='queryData'><b>Treatment and medicine info will be listed here.</b></div>"
?>
