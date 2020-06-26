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
  margin-top:3.5%;
  margin-left: 40%;
  background-color:rgba(0,0,0,0.7);
  width:350px;
  padding:10px;
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
<div class="box">
<center>
<h1>Tradeperson Register</h1>
<form action="tradepersonregister.php" method="POST">
<input type="text" name="Name" placeholder="Name" required><br><br>
<select name="Trade" required>
<option value="" disabled selected hidden>Select a trade</option>
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
<br><br>
<select name="Location" required>
<option value="" disabled selected hidden>Select a location</option>
   <?php
   include 'dataconnect.php';
    $result=$conn->query("select * from location");
    while($row=mysqli_fetch_assoc($result))
    {
      ?>
      <option value="<?= $row['Location']?>"><?php echo $row['Location']?></option>
      <?php

    }
  ?>
</select>
<br><br>

<input type="number" name="PhoneNo" placeholder="Phone Number" required><br><br>
<input type="text" name="Username" placeholder="Username" required><br><br>
<input type="Password" name="Password" placeholder="Password" required><br><br>
<input type="Password" name="ConfirmPassword" placeholder="Confirm Password" required><br><br>
<input type="submit" value="Register"><br><br>
<a href="tradepersonlogin.html">Log In</a>
</center>
</form>
</div>
</div>
</body>
</html>
