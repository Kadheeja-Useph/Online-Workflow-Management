<html><?php
  $host='localhost';
  $user='root';
  $pwd='bcamysql';
  $db='workflow';
  $conn = new mysqli($host,$user,$pwd,$db);
  if($conn->connect_error)
   {
    die("connection failed".$conn->connect_error);
   }
?>
</html>
