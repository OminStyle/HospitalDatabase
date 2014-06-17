<?php
// Patients who have not been diagnosed by doctors from a department
$q = $_GET['q'];
echo '<b>Make a selection:</b>
<form>
<select name="Query7" onchange="showData(this.value, this.name)">';

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT DISTINCT department FROM Doctor";
$result = mysqli_query($con,$sql);
echo '<option value=""></option>';
while($row = mysqli_fetch_array($result)) {
  echo '<option value="' . $row['department'] . '">' . $row['department'] . '</option>';
}

mysqli_close($con);

echo "</select>
</form>
<br>
      <div id='queryData'><b>Patients who have not been diagnosed by doctors from the selected department will be listed here.</b></div>"
?>