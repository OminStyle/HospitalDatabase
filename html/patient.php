<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospital</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
    <link href="../css/jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include ("menu.php"); ?>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
     

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

    <form action="patient_output.php" method="post">
      1. Find Patient name: <br><select name="patient_select_name" style="width: 100%" class="form-control">
      <?php list_patient_id() ?>
      </select>
      <input type="submit">
    </form><br>

    <form action="patient_output.php" method="post">
      2. Find Patient ID: <br><select name="patient_select_id" style="width: 100%" class="form-control">
      <?php list_patient_name() ?>
      </select>
      <input type="submit">
    </form><br>

    <form action="patient_output.php" method="post">
      3. Find patient's disease and treatment: <br><select name="patient_select_id_name" style="width: 100%" class="form-control">
      <?php list_patient_id_name() ?>
      </select>
      <input type="submit">
    </form><br>

    <form action="patient_output.php" method="post">
      4. Find doctor: <br><select name="find_doctor" style="width: 100%" class="form-control">
      <?php list_patient_id_name() ?>
      </select>
      <input type="submit">
    </form><br>

    <form action="patient_output.php" method="post">
      5. Find Medicine: <br><select name="lookup_patient_medicine" style="width: 100%" class="form-control">
      <?php list_patient_id_name() ?>
      </select>
      <input type="submit">
    </form><br>
    
    <form action="patient_output.php" method="post">
      6. Find the most famous doctor: <br><button type="submit">Submit</button>
    </form><br>
  </body>


</html>

<?php
/*
 * list_patient_id
 *
 * Returns a list of patient ids 
 *
 * @return MySQL object
 */
function list_patient_id() {
  $mysqli = mysqli_connect("localhost", "eece304", "eece304Rocks!", "hospital");

  $table = "Assigned_Patient";
  $column_1 = "PID";

  $sql = "SELECT * FROM " . $table;
  $result = mysqli_query($mysqli, $sql);

  while($row = mysqli_fetch_array($result)) {
    echo "<option value=" . $row[$column_1] . ">PID - " . $row[$column_1] . "</option>";
  }

  /* close connection */
  $mysqli->close();
}

/*
 * list_patient_name
 *
 * Returns a list of patient names
 *
 * @return MySQL object
 */
function list_patient_name() {
  $mysqli = mysqli_connect("localhost", "eece304", "eece304Rocks!", "hospital");

  $table = "Assigned_Patient";
  $column_1 = "PName";

  $sql = "SELECT * FROM " . $table;
  $result = mysqli_query($mysqli, $sql);

  while($row = mysqli_fetch_array($result)) {
    echo "<option value=" . $row[$column_1] . ">Patient Name - " . $row[$column_1] . "</option>";
  }

  /* close connection */
  $mysqli->close();
}

/*
 * list_patient_id
 *
 * Returns a list of patient ids and names
 *
 * @return MySQL object
 */
function list_patient_id_name() {
  $mysqli = mysqli_connect("localhost", "eece304", "eece304Rocks!", "hospital");

  $table = "Assigned_Patient";
  $column_1 = "PID";

  $sql = "SELECT * FROM " . $table;
  $result = mysqli_query($mysqli, $sql);

  while($row = mysqli_fetch_array($result)) {
    echo "<option value=" . $row[$column_1] . ">PID - " . $row[$column_1] . ", Patient Name - ". $row['PName'] . "</option>";
  }

  /* close connection */
  $mysqli->close();
}
?>
 </div>

    </div> <!-- /container -->