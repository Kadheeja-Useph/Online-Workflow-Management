<html>
<head>
<title>tradepersonregister</title>
<link href="index.css" type="text/css" rel="stylesheet">
</head>
<style>
.welcometext h1,h2{
  text-align: center;
  color:#fff;
  font-size:50px;
}
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
</style>
<body>
<header>
    <div class="main">
        <div class="logo">
         <font size="10" > <b>FIX FINDER</b></font>
        </div>
        <ul class="navarea"><b>
          <li><a href="welcome.php">HOME</a></li>
          <li><a href="viewrequest.php">VIEW REQUEST</a></li>
          <li><a href="tpprofile.php">PROFILE</a><b></li>
          <li><a href="logout.php">LOGOUT</a><b></li>
        </ul>
    </div>
</header>
    <div class="back">
    <div class="welcometext">
    <h1>Welcome To Fix Finder</h1><br>
    <h2>Hello<br><?php session_start();echo $_SESSION["Name"];?></h2>
        </div> 
    </div>
    </body>
</html>