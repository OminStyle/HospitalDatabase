<b>Select Attribute to Modify:</b>
<form action="nurse_queries/nurse_query4.php" method="post">
	<select name="patient_update_info" style="width: 100%">
        <option value="RoomNumber">1. Room Number</option>
        <option value="Address">2. Address </option>
        <option value="CCN">3. Card Card Number </option>
        <option value="PName">4. Patient Name</option>
        <option value="Age">5. Age</option>
        <option value="Weight">6. Weight</option>
        <option value="Height">7. Height</option>
    </select><br>

	Value: <br><input type="text" name="value" style="width: 100%"><br>
	PID : <br><input type="text" name="pid" style="width: 100%"><br>
	<input type='submit'>
</form>