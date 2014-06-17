<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospital</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">

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
        if (query == "Query1") {
            xmlhttp.open("GET","nurse_queries/nurse_queryOption1.php?q="+query,true);
        } else if (query == "Query2") {
            xmlhttp.open("GET","nurse_queries/nurse_queryOption2.php?q="+query,true);
        } else if (query == "Query3") {
            xmlhttp.open("GET","nurse_queries/nurse_queryOption3.php?q="+query,true);
        } else if (query == "Query4") {
            xmlhttp.open("GET","nurse_queries/nurse_queryOption4.php?q="+query,true);
        } else if (query == "Query5") {
            xmlhttp.open("GET","nurse_queries/nurse_query5.php?q="+query,true);
        } else if (query == "Query6") {
            xmlhttp.open("GET","nurse_queries/nurse_queryOption6.php?q="+query,true);
        } else if (query == "Query7") {
            xmlhttp.open("GET","nurse_queries/nurse_queryOption7.php?q="+query,true);
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
            xmlhttp.open("GET","nurse_queries/nurse_query1.php?q="+str,true);
        } else if (query === "Query2") {
            xmlhttp.open("GET","nurse_queries/nurse_query2.php?q="+str,true);
        } else if (query === "Query3") {
            xmlhttp.open("GET","nurse_queries/nurse_query3.php?q="+str,true);
        } else if (query === "Query4") {
            xmlhttp.open("GET","nurse_queries/nurse_query4.php?q="+str,true);
        } else if (query === "Query5") {
            xmlhttp.open("GET","nurse_queries/nurse_query5.php?q="+str,true);
        } else if (query === "Query6") {
            xmlhttp.open("GET","nurse_queries/nurse_query6.php?q="+str,true);
        } else if (query === "Query7") {
            xmlhttp.open("GET","nurse_queries/nurse_query7.php?q="+str,true);
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
          <b>Select a query:</b>
        <form>
            <select name="Queries" onchange="showQueryOptions(this.value)">
                <option value=""></option>
                <option value="Query1">Find all patients from this room:</option>
                <option value="Query2">Insert New Patient</option>
                <option value="Query3">Query3</option>
                <option value="Query4">Query4</option>
                <option value="Query5">Query5</option>
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