<html><?php
session_start();
  include 'dataconnect.php';
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $ConfirmPassword=$_POST['ConfirmPassword'];
    $result=$conn->query("select * from admin");
if($result->num_rows>0)
{
while($row=mysqli_fetch_assoc($result))
{
   if($row["Username"]==$Username)
   {
     ?>
     <script type="text/javascript">
       alert("Username already exists");
       window.location.replace("addadmin.html");
     </script>
     <?php
   }

  }
  }
    if($Password===$ConfirmPassword)
    {
      //die("sdsds");

      $conn->query("insert into admin(Username,Password)values('$Username','$Password')") or die(mysql_error());
    ?>
    <script type="text/javascript">
      alert("Registered Successfully");
      window.location.replace("adminpage.php");
    </script>
    <?php
    }
    else
  {
    ?>
    <script type="text/javascript">
      alert("Not Same");
      window.location.replace("adminpage.php");
    </script>
    <?php
    }


?>
</html>
