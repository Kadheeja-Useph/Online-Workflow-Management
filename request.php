<html>
    <?php
    session_start();
include 'dataconnect.php';
$Tpid=$_GET["id"];
$Uid=$_SESSION['Uid'];
echo $Tpid;
$result=$conn->query("insert into request(Tpid,Uid,Status,prev)values($Tpid,$Uid,'pending',1)");
?>

<script type="text/javascript">
      alert("Request send");
      window.location.replace("uwelcome.php");
    </script>
    </html>
