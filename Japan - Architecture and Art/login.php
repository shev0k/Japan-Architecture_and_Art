<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>

<style>

body {
    font-family: Verdana, Tahoma, Arial, "Trebuchet MS", Sans-Serif, Georgia, Courier, "Times New Roman", Serif;
    font-size: 8pt;
    background-image: url(images/PR55.jpg);
	background-position: cover;
	background-repeat: no-repeat;
	background-size: cover;
    margin: 0;
    padding: 0;
    height: 0%;
}

.wrapper {
    text-align: center;
    width: 100%;
    height: 100%;
    padding: 20% 0px;
    position: relative;
}

.logo {
    width: 115px;
    height: 110px;
    margin: 17px 1px 1px 36px;
    background-image: url(images/JP.jpg);
	border-radius: 50%;
}

.clearfix {
    display: block;
}

.main {
    width: 480px;
    height: 150px;
    margin: 0 auto;
    color: #000000;
    background: #0d0d0d;
    -moz-box-shadow: 0 0 10px 5px #000;
    -webkit-box-shadow: 0 0 10px 5px #000;
    box-shadow: 0 0 10px 5px #000;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}

button{
	background-color: #0d0d0d;
	color: white;
	margin: 0;
	height: 22px;
	width: 75px;
	margin-top: 13px;
	font-size: 11px;
	border: none;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	cursor: pointer;
	transition: 0.3s;
	border-radius: 4px;
}

button:hover {
  background-color:#b3b3b3;
  color: black;
}

.button2 { 
	style="text-decoration:none; 
	display:inline-block; 
	border:none; 
	background-color:#0d0d0d;
	color: white;
	padding:5px 14px; 
	margin:4px 2px; 
	width:160px; 
	cursor:pointer; 
	height:50px;">
    transition: 0.3s;
	border-radius: 4px;
}

.button2:hover {
  background-color:#b3b3b3;
  color: black;
}

label{
	position: relative;
	margin-right: 125px;
}

a{
	text-decoration: none;
	color:white;
}

.font_2 {
	font: 	normal normal normal 
			12px
			futura-lt-w01-light,sans-serif ;
			color:#FFFFFF;
	font-weight: bold;

}

.font_3 {
	color:#FFFFFF;
	font-weight: bold;
}

.index {
border-radius: 4px;
}	

</style>

</head>

<body>

<form action="validation.php" method="POST">
<div class="wrapper">
<div class="main">
<div class="logo" style="float: left;"></div>

<div style="padding-top: 7px;float:right;max-width:320px;">

	<label class="font_2" style="float:right;padding: 13px 138px 6px 0px;">Login</label>
	<input class="index" style="margin-top:3px"  placeholder=" username" type="text" size="40" name="name" />
	<div class="clearfix"></div>

	<label class="font_2" style="float:right;padding: 8px 10px 4px 0px;"></label>
	<input  class="index" placeholder=" ********" type="password" id="pass" size="40" name="password" required />
	<div class="clearfix"></div>
	
	<a style="margin-right:5px; margin-left: 123px;" href="register.php" style="text-decoration:none" class="button2">Register</a></button>
	
	<button type="submit" name="submit" value="Login Here">Login</button>
	
</div>

</div>
</div>
</form>
</body>
</html>