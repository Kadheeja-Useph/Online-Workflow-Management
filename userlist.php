<html>
<head>
<title>tradepersonregister</title>
<link href="index.css" type="text/css" rel="stylesheet">
</head>
<style>
body{
  background-color: lightblue;
}
.box{
  width: 1100px;

vertical-align:middle;
margin-top:110px;
margin-left:10%;
padding-top:100px;

height: 300px;
background-color:rgba(0,0,0,0.7);
text-align: center;
}
.box h1{
  text-align: center;
  color:#fff;
}
input{
  height: 30px;
  border-radius: 25px;
}
select:invalid {
  color: gray;
}
option {
  color: black;
}
select{
  width:176px;
  height: 30px;
  border-radius: 25px;
}
form a{
  color:red;
  font-size:20px;
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
</style>
<body>
<header>
        <div class="main">
        <div class="logo">
         <font size="10" > <b>FIX FINDER</b></font>
        </div>
        <ul class="navarea"><b>
          <li><a href="adminpage.php">BACK</a></li>
         <li><a href="logout.php">LOGOUT</a></li>
        </ul>
      </div>
    </header>
    <div class="back">
<div class="box"><center>
<?php
    include 'dataconnect.php';
    $result = $conn->query("select * from user");
    if($result->num_rows > 0)
    {
?>
   <table width="100%" border="1">
   <tr><th>Uid</th>
   <th>Name</th>
   <th>Location</th>
   </tr>
<?php

   while($row = mysqli_fetch_assoc($result))
    {
      echo "<tr><td>".$row["Uid"]."</td>
             <td>".$row["Name"]."</td>
             <td>".$row["Location"]."</td>
            </tr>";
    }
   }
    else
     {
       echo "0 results";
     }
?>
  </table>

 <br><br>

 </center>
</div>
</div>
 </body>
 </html>
