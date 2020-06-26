<html>
<head>
<title>tradepersonregister</title>
<link href="index.css" type="text/css" rel="stylesheet">
</head>
<style>

.welcometext{

width: 1100px;

vertical-align:middle;
margin-top:110px;
margin-left:10%;
padding-top:100px;

height: 300px;
background-color:rgba(0,0,0,0.7);
text-align: center;

}
input{
  height: 30px;
  border-radius: 25px;
}
table th
{
color:#3b852a;
  background-color: black;
}
table td
{
color:black;
  background-color: white;
}
select:invalid {
  color: gray;
}
option {
  color: black;
}
select{
  width:300px;
  height: 30px;
  border-radius: 25px;
}
</style>
<body>
<header>
    <div class="main">
        <div class="logo">
         <font size="10" > <b>FIX FINDER</b></font>
        </div>

    </div>
</header>
    <div class="back">
    <div class="welcometext">
<?php

   include 'dataconnect.php';
   $Trade=$_POST['Trade'];
   $conn->query("insert into trade(Trade)values('$Trade')");
   $result=$conn->query("select * from trade");
   if($result->num_rows>0)
   {
?>
      <table width="100%" border="1">
        <tr><td>Tid</td>
        <td>Trade</td></tr>

<?php
      while($row=mysqli_fetch_assoc($result))
      {
          echo "<tr><td>" . $row["Tid"]."</td><td>". $row["Trade"]."</td></tr>" ;
      }
      "</table>";
    }
    else
      echo "0 results";
?>
</div>
</div>
</body>
</html>
