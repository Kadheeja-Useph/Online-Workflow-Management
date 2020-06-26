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
        <ul class="navarea"><b>
        <li><a href="search1.php">Search for tradeperson</a></li>
          <li><a href="tradepersonlogin.html">Tradeperson Signup</a><b></li>
        </ul>
    </div>
</header>
    <div class="back">
    <div class="welcometext">
    <form action="search.php" method="POST">
    <select name="Trade">
        <option value="" disable selected hidden>Select your trade</option>
       <?php
       include 'dataconnect.php';
        $result=$conn->query("select * from trade");
        while($row=mysqli_fetch_assoc($result))
        {
          ?>
          <option value="<?= $row['Trade']?>"><?php echo $row['Trade']?></option>
          <?php

        }
      ?>
    </select>
    <input type="submit" value="Search">
  </form>
        </div> 
    </div>
    </body>
</html>