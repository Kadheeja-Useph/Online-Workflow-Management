<html>
<head>
<title>tradepersonregister</title>
<link href="index.css" type="text/css" rel="stylesheet">
</head><style>
table
{
color:#3b852a;
  background-color: black;
  border:none;
}
table th,td{
  border-style: none;
}

</style>
<body>
<header>
    <div class="main">
        <div class="logo">
         <font size="10" > <b>FIX FINDER</b></font>
        </div>
        <ul class="navarea"><b>
          <li><a href="welcome.php">HOME</a></li>
          <li><a href="viewrequest.php">VIEW REQUEST</a></li>
          <li><a href="tpprofile.php">PROFILE</a><b></li>
          <li><a href="logout.php">LOGOUT</a><b></li>
        </ul>
    </div>
</header>
    <div class="back">
    <div class="welcometext">
      <?php
session_start();
          //ini_set('display_errors',1);
           //error_reporting(E_ALL & ~E_STRICT);
            include 'dataconnect.php';
            $Tpid=$_SESSION["Tpid"];
            $result=$conn->query("select * from tradeperson where Tpid='$Tpid'");
               if($result->num_rows>0)
              {


?>
  <table width="100%" border="1">

<?php
  while($row=mysqli_fetch_assoc($result))
  {
echo "<tr><th>Name</th><td>" . $row["Name"] . "</td></tr><tr><th>Trade</th><td>" . $row["Trade"] . "</td></tr><tr><th>Location</th><td>".$row["Location"] . "</td></tr>" ;


 }
}
  else
     echo "0 results";
?>
</table>

</div>
    </div>
    </body>
</html>
