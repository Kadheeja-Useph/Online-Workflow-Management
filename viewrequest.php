<html>
<head>
<title>tradepersonregister</title>
<link href="index.css" type="text/css" rel="stylesheet">
</head>
<style>
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
session_start();
 include 'dataconnect.php';
 $Tpid=$_SESSION["Tpid"];
 $result=$conn->query("select * from request where Tpid='$Tpid'");
 if($result->num_rows>0)
 {
    ?>
              <table width="100%" border="1">

    <?php
              while($row=mysqli_fetch_assoc($result))
              {
                $s=$row["SlNo"];
                  if($row["Status"]=="pending")
                  {

                    $u=$row['Uid'];
                    $result1=$conn->query("select * from user where Uid='$u'");
                    if($result1->num_rows>0)
                    {
                      while($row=mysqli_fetch_assoc($result1))
                      {
                   ?>
                   <table width="100%" border="1">
                   <tr><td>Name</td><td><?php echo $row["Name"]?></td>
                      <tr><td>Location</td><td><?php echo $row["Location"]?></td></tr>
                      </table>

                   <a href="confirm.php?id=<?php echo $s?>">Confirm</a><a href="reject.php?id=<?php echo $s?>">Reject</a>
                  <?php
              } }
                      }
          }
        }

            else
            {
            ?><script type="text/javascript">
            alert("No request to show");

            window.location.replace("welcome.php");
          </script><?php
          }?>
     </div>
    </div>
    </body>
</html>
