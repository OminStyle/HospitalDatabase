<?php
// medicines/drugs are associated with specific treatment
$q = $_GET['q'];
echo '<b>Make a selection:</b>
<form>
<select name="Query2">';

echo 'PID: <input type="text" name="pid"><br>';
echo 'Room Number: <input type="text" name="roomNumber">';
echo 'Address: <input type="text" name="address">';
echo 'Care Card Number: <input type="text" name="ccn">';
echo 'Attending Physician: <input type="text" name="pname">';
echo 'Age: <input type="text" name="age">';
echo 'Weight: <input type="text" name="weight">';
echo 'Height: <input type="text" name="Height">';
echo 'Queue Number: <input type="text" name="queueNumber">';

echo "</select>
<input type='submit'>
</form>
<br>
<div id='queryData'><b>Treatment and medicine info will be listed here.</b></div>";
?>
