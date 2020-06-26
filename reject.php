<?php
 include 'dataconnect.php';
 $SlNo=$_GET["id"];
 $conn->query("update request set Status='reject' where SlNo=$SlNo");
 ?>