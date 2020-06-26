<?php
session_start();
 include 'dataconnect.php';
 $SlNo=$_GET["id"];
 $result=$conn->query("select * from request where SlNo=$SlNo ");
 if($result->num_rows>0)
 {
              while($row=mysqli_fetch_assoc($result))
              {

                      $conn->query("update  request set prev=0");

              }
            }
            header("location:respond.php")
    ?>
