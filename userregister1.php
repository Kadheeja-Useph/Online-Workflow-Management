<html>
<head>
<title>userregister</title>
<link href="index.css" type="text/css" rel="stylesheet">
</head>
<style>
body{
  background-color: lightblue;
}
.box{
  margin-top:10%;
  margin-left: 40%;
  background-color:rgba(0,0,0,0.7);
  width:300px;
  padding:10px;
}
.box h1,h2{
  text-align: center;
  color:#fff;
}
input{
  height: 30px;
  border-radius: 25px;
  
}
form a{
  color:red;
  font-size:20px;
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
<h1>User Register</h1>
<form action="userregister.php" method="POST">
<input type="text" name="Name" placeholder="Name" required><br><br>
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
<input type="text" name="Username" placeholder="Username" required><br><br>
<input type="Password" name="Password" placeholder="Password" required><br><br>
<input type="Password" name="ConfirmPassword" placeholder="Confirm Password" required><br><br>
<input type="submit" value="Register">
<input type="reset" value="Reset"><br><br>
<a href="userlogin.html">Log In</a>
</center>
</form>
</div>
</div>
</body>
</html>
