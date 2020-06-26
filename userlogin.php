
<html>
<body>
<?php
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_STRICT);
session_start();
include 'dataconnect.php';
$Username=$_POST["Username"];
$Password=$_POST["Password"];
$result=$conn->query("select * from user where Username='$Username' and Password='$Password'");
if($result->num_rows>0)
{
while($row=mysqli_fetch_assoc($result))
{
    $_SESSION['Uid']=$row["Uid"];
    $_SESSION['Name']=$row["Name"];

    ?>
    <script type="text/javascript">
      alert("Login Success");
      window.location.replace("uwelcome.php");
    </script>
    <?php
  }
}
  else
  {
    ?>
    <script type="text/javascript">
      alert("try again");
      window.location.replace("userlogin.html");
    </script>
    <?php
   $conn->close();
  }

?>
</body>
</html>
