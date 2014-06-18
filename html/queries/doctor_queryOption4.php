<?php
// All patients who have a particular disease
$q = $_GET['q'];
echo '<b>Select a disease ID:</b>
<form>
<select class="form-control" name="Query4" onchange="showData(this.value, this.name)">';

$con = mysqli_connect('localhost','eece304','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT DID FROM Disease";
$result = mysqli_query($con,$sql);
echo '<option value=""></option>';
while($row = mysqli_fetch_array($result)) {
  echo '<option value="' . $row['DID'] . '">' . $row['DID'] . '</option>';
}

mysqli_close($con);

echo "</select>
</form>
<br>
      <div id='queryData'><b>All patients who have a particular disease will be listed here.</b></div>"
?>