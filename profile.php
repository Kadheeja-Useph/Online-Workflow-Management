<html>
<head>
<title>tradepersonregister</title>
<link href="index.css" type="text/css" rel="stylesheet">
</head>
<style>

.welcometext{

width: 1100px;

vertical-align:middle;
margin-top:110px;
margin-left:10%;
padding-top:100px;
color:white;
height: 300px;
background-color:rgba(0,0,0,0.7);
text-align: center;

}
.welcometext a{
 width:200px;
 text-align:center;
}
table th
{
color:#3b852a;
  background-color: black;
}
table td
{
color:black;
  background-color: white;
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
         ini_set('display_errors',1);
          error_reporting(E_ALL & ~E_STRICT);
            include 'dataconnect.php';
            $Tpid=$_GET["id"];
            $result=$conn->query("select * from tradeperson where Tpid='$Tpid'");
               if($result->num_rows>0)
               {
?>
                <table width="100%" border="1"><font color="white">

<?php
                 while($row=mysqli_fetch_assoc($result))
                 {
echo "<tr><td>Name</td><td>" . $row["Name"] . "</td></tr><tr><td>Trade</td><td>" . $row["Trade"] . "</td></tr><tr><td>Location</td><td>".$row["Location"] . "</td></tr>" ;

?></font></table>
<a  href="request.php?id=<?php echo $row["Tpid"] ?>">request</a>

<?php
 }
}
  else
     echo "0 results";
?>
</div>
    </div>
    </body>
</html>
