<?php
// All patients who have a particular disease
$q = $_GET['q'];
echo '<b>Make a selection:</b>
<form>
<select name="Query4" onchange="showData(this.value, this.name)">';

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT DID FROM Disease";
$result = mysqli_query($con,$sql);
echo '<option value="">Select a disease ID:</option>';
while($row = mysqli_fetch_array($result)) {
  echo '<option value="' . $row['DID'] . '">' . $row['DID'] . '</option>';
}

mysqli_close($con);

echo "</select>
</form>
<br>
      <div id='queryData'><b>Treatment and medicine info will be listed here.</b></div>"
?>