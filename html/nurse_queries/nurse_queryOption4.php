<b>Select One Attribute to Modify:</b>
<form action="nurse_queries/nurse_query4.php" method="post">
	<select name="patient_update_info" style="width: 100%">
        <option value="RoomNumber">Room Number</option>
        <option value="Address">Address </option>
        <option value="CCN">Card Card Number </option>
        <option value="PName">Patient Name</option>
        <option value="Age">Age</option>
        <option value="Weight">Weight</option>
        <option value="Height">Height</option>
    </select><br>

	New Value: <br><input type="text" name="value" style="width: 100%"><br>
	Enter Patient(PID) : <br><input type="text" name="pid" style="width: 100%"><br>
	<input class="form-control" type='submit'>
</form>