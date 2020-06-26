<?php
 include 'dataconnect.php';
 $SlNo=$_GET["id"];
 echo $SlNo;
 $conn->query("update request set Status='confirm' where SlNo='$SlNo'");
 header("location:viewrequest.php")
 ?>