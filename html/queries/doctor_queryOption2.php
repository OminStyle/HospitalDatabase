<?php
echo '<form>';
echo '<select name="Query2" onchange="showData(this.value, this.name)">';


$con = mysqli_connect('localhost','root','eece304Rocks!','hospital');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT DName FROM Disease";
$result = mysqli_query($con,$sql);
echo '<option value="">Select a Disease Name:</option>';
while($row = mysqli_fetch_array($result)) {
  echo '<option value="' . $row['DName'] . '">' . $row['DName'] . '</option>';
}

mysqli_close($con);

echo "</select>
</form>
<br>
      <div id='txtHint1'><b>Person info will be listed here.</b></div>"
?>
