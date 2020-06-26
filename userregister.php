
<?php
session_start();
  include 'dataconnect.php';
    $Name=$_POST['Name'];
    $Location=$_POST['Location'];
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $ConfirmPassword=$_POST['ConfirmPassword'];
    $result=$conn->query("select * from user");
if($result->num_rows>0)
{
while($row=mysqli_fetch_assoc($result))
{
   if($row["Username"]==$Username)
   {
     ?>
     <script type="text/javascript">
       alert("Username already exists");
       window.location.replace("userregister1.php");
     </script>
     <?php
   }

  }
  }

    if($Password===$ConfirmPassword)
    {
      //die("sdsds");

      $conn->query("insert into user(Name,Location,Username,Password)values('$Name','$Location','$Username','$Password')") or die(mysql_error());

      $result=$conn->query("select * from user");
if($result->num_rows>0)
{
while($row=mysqli_fetch_assoc($result))
{

    $_SESSION['Uid']=$row["Uid"];
    $_SESSION['Name']=$row["Name"];

    }
    }
    ?>
    <script type="text/javascript">
      alert("Registered Successfully");
      window.location.replace("uwelcome.php");
    </script>
    <?php
    }
    else
  {
    echo "not same";
    }


?>
