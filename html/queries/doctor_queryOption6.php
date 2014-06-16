<?php
echo '<b>Make a selection:</b>';
echo '<form>
  <select name="Query6" onchange="showQueryOptions(this.value)">';

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT Distinct RoomNumber 
      FROM Assigned_Patient";
$result = mysqli_query($con,$sql);
echo '<option value="">Select a Room:</option>';
while($row = mysqli_fetch_array($result)) {
  echo '<option value="' . $row['RoomNumber'] . '">' . $row['RoomNumber'] . '</option>';
}

mysqli_close($con);

echo "</select>
</form>
<br>
      <div id='txtHint1'><b>Patients in selected Room will be listed here.</b></div>"
?>
