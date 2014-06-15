<!DOCTYPE html>
<html>
<head>
<title>CPSC 304 Project Summer 2014</title>
</head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="cpsc304.js"></script>

<body>
<h1>CPSC 304 Project: May - June 2014</h1>
<h2>Hospital</h2>

<form action="cpsc304_output.php" method="post">

	<select name="table_select">
	<option value="Assigned_Patient">Assigned_Patient</option>
	<option value="Attend">Attend</option>
	<option value="CureUsing_Treatment">CureUsing_Treatment</option>
	<option value="Diagnose">Diagnose</option>
	<option value="Disease">Disease</option>
	<option value="Doctor">Doctor</option>
	<option value="Equipment">Equipment</option>
	<option value="HospitalStaff">HospitalStaff</option>
	<option value="Medicine">Medicine</option>
	<option value="Nurse">Nurse</option>
	<option value="Room">Room</option>
	<option value="Take">Take</option>
	<option value="Utilize">Utilize</option>
	<option value="Waitlist_In">Waitlist_In</option>
	<option value="aircraft">Aircraft</option>
	</select><br>

	Column 1: <input type='text' name="column_1"><br>
	Column 2: <input type='text' name="column_2"><br>

	<input type="submit">
</form>
<div id="output"></div>

</body>
</html>

