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

    <script>
    function showQueryOptions(query) {
        if (query=="") {
            document.getElementById("queryOptions").innerHTML="";
            return;
        } 
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                document.getElementById("queryOptions").innerHTML=xmlhttp.responseText;
            } 
        }
        if (query == "Query0") {
            xmlhttp.open("GET","queries/doctor_queryOption0.php?q="+query,true);
        } else if (query == "Query1") {
            xmlhttp.open("GET","queries/doctor_queryOption1.php?q="+query,true);
        } else if (query == "Query2") {
            xmlhttp.open("GET","queries/doctor_queryOption2.php?q="+query,true);
        } else if (query == "Query3") {
            xmlhttp.open("GET","queries/doctor_queryOption3.php?q="+query,true);
        } else if (query == "Query4") {
            xmlhttp.open("GET","queries/doctor_queryOption4.php?q="+query,true);
        } else if (query == "Query5") {
            xmlhttp.open("GET","queries/doctor_query5.php?q="+query,true);
        } else if (query == "Query6") {
            xmlhttp.open("GET","queries/doctor_queryOption6.php?q="+query,true);
        } else if (query == "Query7") {
            xmlhttp.open("GET","queries/doctor_queryOption7.php?q="+query,true);
        } else if (query == "Query8") {
            xmlhttp.open("GET","queries/doctor_queryOption8.php?q="+query,true);
        } else if (query == "Query9") {
            xmlhttp.open("GET","queries/doctor_query9.php?q="+query,true);
        } else if (query == "Query10") {
            xmlhttp.open("GET","queries/doctor_query10.php?q="+query,true);
        } else if (query == "Query11") {
            xmlhttp.open("GET","queries/doctor_queryOption11.php?q="+query,true);
        } else if (query == "Query12") {
            xmlhttp.open("GET","queries/doctor_query12.php?q="+query,true);
        } else if (query == "Query13") {
            xmlhttp.open("GET","queries/doctor_queryOption13.php?q="+query,true);
        }

        
        xmlhttp.send();
    }

    function showData(str, query) {
        if (str=="") {
            document.getElementById("queryData").innerHTML="";
            return;
        } 
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                document.getElementById("queryData").innerHTML=xmlhttp.responseText;
            }
        }
        if (query === "Query1") {
            xmlhttp.open("GET","queries/doctor_query1.php?q="+str,true);
        } else if (query === "Query2") {
            xmlhttp.open("GET","queries/doctor_query2.php?q="+str,true);
        } else if (query === "Query3") {
            xmlhttp.open("GET","queries/doctor_query3.php?q="+str,true);
        } else if (query === "Query4") {
            xmlhttp.open("GET","queries/doctor_query4.php?q="+str,true);
        } else if (query === "Query5") {
            xmlhttp.open("GET","queries/doctor_query5.php?q="+str,true);
        } else if (query === "Query6") {
            xmlhttp.open("GET","queries/doctor_query6.php?q="+str,true);
        } else if (query === "Query7") {
            xmlhttp.open("GET","queries/doctor_query7.php?q="+str,true);
        } else if (query === "Query8") {
            xmlhttp.open("GET","queries/doctor_query8.php?q="+str,true);
        } else if (query === "Query9") {
            xmlhttp.open("GET","queries/doctor_query9.php?q="+str,true);
        } else if (query === "Query10") {
            xmlhttp.open("GET","queries/doctor_query10.php?q="+str,true);
        } else if (query === "Query11") {
            xmlhttp.open("GET","queries/doctor_query10.php?q="+str,true);
        } else if (query === "Query12") {
            xmlhttp.open("GET","queries/doctor_query10.php?q="+str,true);
        }  else if(query === "Query13") {
            xmlhttp.open("GET","queries/doctor_query13.php?q="+str,true);
        }
        xmlhttp.send();
    }
</script>

</head>
<body>
    <?php include ("menu.php"); ?>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h2>Hello Dr. Yeung</h2>
          <b>Select a query:</b>
        <form>
            <select class="form-control" name="Queries" onchange="showQueryOptions(this.value)">
                <option value=""></option>
                <option value="Query1">1. Medicines for selected Treatment</option>
                <option value="Query2">2. Find Disease Index / Disease Name</option>
                <option value="Query3">3. Find Room Number of selected Patient</option>
                <option value="Query4">4. All patients with selected Disease</option>
                <option value="Query5">5. Disease have by all patients above age 70</option>
                <option value="Query6">6. Patients in selected Room</option>
                <option value="Query7">7. Patients not being treated by selected department</option>
                <option value="Query8">8. Number of Patients treated by each department</option>
                <option value="Query9">9. Longest Patient Stay for each disease</option>
                <option value="Query10">10. For each disease, find the age of oldest Patient diagnosed by experienced doctor</option>
                <option value="Query11">11. Remove Disease</option>
                <option value="Query12">12. For each disease, find the age of youngest Patient diagnosed by experienced doctor</option>
                <option value="Query13">13. Insert a Diagnosis for a patient</option>
            </select>
        </form>
      <br>
      <div id="queryOptions"></div>

  </div>

</div> <!-- /container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>


</html>
