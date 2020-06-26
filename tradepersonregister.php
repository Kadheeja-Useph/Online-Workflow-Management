<?php
 //ini_set('display_errors',1);
 //error_reporting(E_ALL & ~E_STRICT);
 session_start();
  include 'dataconnect.php';
    $Name=$_POST['Name'];
    $Trade=$_POST['Trade'];
    $Location=$_POST['Location'];
    $PhoneNo=$_POST['PhoneNo'];
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $ConfirmPassword=$_POST['ConfirmPassword'];
    $result=$conn->query("select * from tradeperson");
if($result->num_rows>0)
{
while($row=mysqli_fetch_assoc($result))
{
   if($row["Username"]==$Username)
   {
     ?>
     <script type="text/javascript">
       alert("Username already exists");
       window.location.replace("traderegister1.php");
     </script>
     <?php
   }

  }
  }
    if($Password==$ConfirmPassword)
    {
     $conn->query("insert into tradeperson(Name,Trade,Location,PhoneNo,Username,Password)values('$Name','$Trade','$Location',$PhoneNo,'$Username','$Password')");
     $result=$conn->query("select * from tradeperson where Name='$Name'");
     if($result->num_rows>0)
     {
     while($row=mysqli_fetch_assoc($result))
     {
      $_SESSION["Name"]=$row["Name"];
      $_SESSION["Tpid"]=$row["Tpid"];
     }
     }
     ?><script type="text/javascript">
       alert("Registered Successfully");

       window.location.replace("welcome.php");
     </script>
     <?php
     echo "registered successfully";
    }
    else
    {
      echo "not same";
    }


?>
