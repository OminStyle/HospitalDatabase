<?php
function find_patient_name() {
  $mysqli = mysqli_connect("localhost", "root", "eece304Rocks!", "hospital");
  // $mysqli = mysqli_connect("localhost", "root", "", "hospital");

  $pid = $_POST["patient_select_name"];

  $sql = "SELECT * FROM Assigned_Patient WHERE PID='".$pid."'";
  $result = mysqli_query($mysqli, $sql);

  while($row = mysqli_fetch_array($result)) {
    echo $row['PName'];
  }

  /* close connection */
  $mysqli->close();
}