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

    <?php 
    if($_POST["patient_select_name"]!= NULL) {
      find_patient_name();
    }
    else if ($_POST["patient_select_id"] != NULL) {
      find_patient_id();
    }
    else if ($_POST["patient_select_id_name"] != NULL) {
      patient_treatment();
    }
    else if($_POST["find_doctor"]) {
      find_patient_doctor();
    }
    else if($_POST["lookup_patient_medicine"] != NULL) {
      lookup_patient_medicine();
    }
    else {
      find_most_famous_doctor();
    }
    ?>

  </body>


</html>

<?php
function find_patient_name() {
  $mysqli = mysqli_connect("localhost", "root", "eece304Rocks!", "hospital");

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
  $mysqli = mysqli_connect("localhost", "root", "eece304Rocks!", "hospital");

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
  $mysqli = mysqli_connect("localhost", "root", "eece304Rocks!", "hospital");

  $pid = $_POST["patient_select_id_name"];

  $sql = "SELECT d.DName, ct.TName
  FROM Disease d, CureUsing_Treatment ct
  WHERE d.DID = ct. DID AND d.DID IN (select di.DID
                                      from Assigned_Patient a, Diagnose di
                                      where a.PID = " . $pid . " 
                                      AND a. PID = di. PID)";
  
  $result = mysqli_query($mysqli, $sql);

  while($row = mysqli_fetch_array($result)) {
    echo $row['DName'] . " " . $row['TName'];
  }

  /* close connection */
  $mysqli->close();
}

function find_patient_doctor() {
  $mysqli = mysqli_connect("localhost", "root", "eece304Rocks!", "hospital");

  $pid = $_POST["find_doctor"];

  $sql = "SELECT    h.HSID, h.HName, a.PID, a.PName
          FROM    HospitalStaff h, Doctor d, Assigned_Patient a, Diagnose di
          WHERE   h.HSID=d.HSID and d.HSID=di.HSID and di.PID = a.PID AND a.PID = " . $pid;

  $result = mysqli_query($mysqli, $sql);

  while($row = mysqli_fetch_array($result)) {
    echo $row['HSID'] . " " . $row['HName'] . " " . $row['PName'];
  }

  /* close connection */
  $mysqli->close();
}

function lookup_patient_medicine() {
  $mysqli = mysqli_connect("localhost", "root", "eece304Rocks!", "hospital");
  $pid = $_POST["lookup_patient_medicine"];

  $sql = "SELECT  m.MName, m.Dosage
          FROM    Medicine m, Assigned_Patient a, Take t, Diagnose d, CureUsing_Treatment c
          WHERE   a.PID=d.PID and d.DID=c.DID and t.TName =c.TName and t.MName=m.MName and a.PID= " . $pid;

  $result = mysqli_query($mysqli, $sql);

  while($row = mysqli_fetch_array($result)) {
    echo $row['MName'] . " " . $row['Dosage'];
  }

  /* close connection */
  $mysqli->close();
}

function find_most_famous_doctor() {
  $mysqli = mysqli_connect("localhost", "root", "eece304Rocks!", "hospital");

  $sql = "SELECT  HName
          FROM    HospitalStaff h, DIagnose d
          Where   h.HSID = d.HSID 
          Group by  d.HSID
          Having  count(PID) >= ALL (Select Count(PID)
                                     From Diagnose
                                     Group By HSID)";
  $result = mysqli_query($mysqli, $sql);

  while($row = mysqli_fetch_array($result)) {
    echo $row['HName'];
  }

  /* close connection */
  $mysqli->close();
}
?>