<html>
<body>
<?php
include 'dataconnect.php';
$Username=$_POST["Username"];
$Password=$_POST["Password"];
$result=$conn->query("select * from admin where Username='$Username' and Password='$Password'");
if($result->num_rows>0)
{
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <script type="text/javascript">
      alert("Login Success");
      window.location.replace("adminpage.php");
    </script>
    <?php
  }
}
  else
  {
    ?>
    <script type="text/javascript">
      alert("try again");
      window.location.replace("admin.html");
    </script>
    <?php
  }

?>
</body>
</html>
