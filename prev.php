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
height: 300px auto;
background-color:rgba(0,0,0,0.7);
text-align: center;

}
.welcometext a{
 width:200px;
 text-align:center;
}

</style>
<body>
<header>
    <div class="main">
        <div class="logo">
         <font size="10" > <b>FIX FINDER</b></font>
        </div>
        <ul class="navarea"><b>
        <li><a href="search1.php">SEARCH FOR TRADEPERSON</a><b></li>
          <li><a href="uwelcome.php">HOME</a></li>
          <li><a href="respond.php">NOTIFICATION</a></li>
          <li><a href="prev.php">PREV</a><b></li>
          <li><a href="logout.php">LOGOUT</a><b></li>
        </ul>
    </div>
</header>
    <div class="back">
    <div class="welcometext"><?php
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_STRICT);
session_start();
 include 'dataconnect.php';
 $Uid=$_SESSION["Uid"];
 $result=$conn->query("select * from request where Uid=$Uid and prev=0");
    if($result->num_rows>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $s=$row["SlNo"];
                if($row["Status"]=="confirm")
            {
                  $a=$row["Tpid"];
                  $result1=$conn->query("select * from tradeperson where Tpid=$a");
                  if($result1->num_rows>0)
                {
                       while($row=mysqli_fetch_assoc($result1))
                    {
                           echo "your request accepted<br>
                             Name:".$row["Name"].
                            "<br>Trade:".$row["Trade"].
                             "<br>Phone Number:".$row["PhoneNo"];
                             ?>
                    <hr>
                   <?php
                    }
                }
            }
                if($row["Status"]=="reject")
            {
                 $a=$row["Tpid"];
                 $result1=$conn->query("select * from tradeperson where Tpid=$a");
                 if($result1->num_rows>0)
                {
                       while($row=mysqli_fetch_assoc($result1))
                    {
                           echo "your request rejected<br>
                            Name:".$row["Name"].
                            "<br>Trade:".$row["Trade"];
                            ?>
                   <hr>
                   <?php
                    }
                }
            }


        }
    }

            else
            {
            echo  "no notification";
            }

?>
</div>
    </div>
    </body>
</html>
