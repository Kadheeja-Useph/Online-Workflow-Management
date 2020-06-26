
<html>
<body>
<?php
session_start();
include 'dataconnect.php';
$Username=$_POST["Username"];
$Password=$_POST["Password"];

$result=$conn->query("select * from tradeperson where Username='$Username' and Password='$Password'");
if($result->num_rows>0)
{
while($row=mysqli_fetch_assoc($result))
{
    $_SESSION["Name"]=$row["Name"];
      $_SESSION["Tpid"]=$row["Tpid"];
    ?>
    <script type="text/javascript">
      alert("Login Success");
      window.location.replace("welcome.php");
    </script>
    <?php
  }
}
  else
  {
    ?>
    <script type="text/javascript">
      alert("try again");
      window.location.replace("tradepersonlogin.html");
    </script>
    <?php
}
?>
</body>
</html>
