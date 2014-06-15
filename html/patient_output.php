<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospital</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

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
        <h1>Hospital Database</h1>
        <p>For EECE 304</p>
      </div>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

    <?php find_patient_name() ?>
    <?php find_patient_id() ?>

  </body>


</html>

<?php
function find_patient_name() {
  // $mysqli = mysqli_connect("54.201.137.130", "root", "eece304Rocks!", "hospital");
  $mysqli = mysqli_connect("localhost", "root", "", "hospital");

  $pid = $_POST["patient_select_name"];

  $sql = "SELECT * FROM Assigned_Patient WHERE PID='".$pid."'";
  $result = mysqli_query($mysqli, $sql);

  while($row = mysqli_fetch_array($result)) {
    echo $row['PName'];
  }

  /* close connection */
  $mysqli->close();
}

function find_patient_id() {
  // $mysqli = mysqli_connect("54.201.137.130", "root", "eece304Rocks!", "hospital");
  $mysqli = mysqli_connect("localhost", "root", "", "hospital");

  $name = $_POST["patient_select_id"];

  $sql = "SELECT * FROM Assigned_Patient WHERE PName='".$name."'";
  $result = mysqli_query($mysqli, $sql);

  while($row = mysqli_fetch_array($result)) {
    echo $row['PID'];
  }

  /* close connection */
  $mysqli->close();
}

/*
 * patient_treatment
 *
 * Look at patient’s disease and treatments given patient id.
 *
 * @return MySQL object
 *
 * These functions require variables passed in from html variables using the $_POST[(variable name)];
 */
function patient_treatment() {
  // $mysqli = mysqli_connect("54.201.137.130", "root", "eece304Rocks!", "hospital");
  $mysqli = mysqli_connect("localhost", "root", "", "hospital");

  $name = $_POST["patient_select_id_name"];

  $sql = "SELECT d.DName, ct.TName
  FROM Disease d, CureUsing_Treatment ct
  WHERE d.DID = ct. DID AND d.DID IN (select di.DID
                                      from Assigned_Patient a, Diagnose di
                                      where a.PID = 3 
                                      AND a. PID = di. PID)";
  
  $result = mysqli_query($mysqli, $sql);

  while($row = mysqli_fetch_array($result)) {
    echo $row['PID'];
  }

  /* close connection */
  $mysqli->close();
}
?>

