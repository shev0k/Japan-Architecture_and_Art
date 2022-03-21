<html>
<head>
<style>

.clearfix {
    display: block;
}

label{
	position: relative;
	margin-right: 250px;
}

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
    text-align: left;
    width: 100%;
    height: 100%;
    padding: 20% 0px;
    position: relative;
}

.logo {
    width: 115px;
    height: 110px;
    margin: 18px 1px 1px 83px;
    background-image: url(images/JP.jpg);
	border-radius: 50%;
}

.main {
    width: 360px;
    height: 378px;
    margin: 0 auto;
    color: #FFFFFF;
    background: #0d0d0d;
    -moz-box-shadow: 0 0 10px 5px #000;
    -webkit-box-shadow: 0 0 10px 5px #000;
    box-shadow: 0 0 10px 5px #000;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}

.container{
	padding-top: 5px;
	float:right;
	max-width:320px;
}

button{
	background-color: #0d0d0d;
	color: white;
	margin: 0;
	height: 22px;
	width: 75px;
	margin-top: 14px;
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

#E{
	margin-right: 275px;
}

#IN{
	margin-right: 100px;
}

#U{
	margin-right: 248px;
}

.font_2 {
	font: 	normal normal normal 
			12px
			futura-lt-w01-light,sans-serif ;
			color:#FFFFFF;
	font-weight: bold;

}

.index {
border-radius: 4px;
}	
    
</style>
</head>
<body>

<form action="insert.php" method="POST" >
<div class="wrapper">
<div class="main">

<div class="container">
<div class="logo" style="float: center;"></div>

<p style="padding:6px 0px 0px 0px;" class="font_2"> Entry Form </p>
<label style="float:right;padding: 3px 10px 4px 0px;" id="U"></label>
<input class="index" placeholder=" Username" id="IN" type="text" size="42" name="name" required />
<div class="clearfix"></div>

<label style="float:right;padding: 12px 10px 4px 0px;" id="E"></label>
<input class="index" placeholder=" Email" type="email" size="42" name="email" />
<div  id="IN" class="clearfix"></div>

<label style="float:right;padding: 12px 10px 4px 0px;"></label>
<input class="index" placeholder=" Password" type="password" size="42" name="password" required />
<div  id="IN" class="clearfix"></div>

<label style="float:right;padding: 12px 10px 4px 0px;"></label>
<input class="index" placeholder=" Re-enter Password" id="IN" type="password" size="42" name="" required />
<div class="clearfix"></div>

<button style="margin-right:5px; margin-left: 210px;" type="submit" name="submit" value="Register Here">Register</button>

</div>

</div>
</div>
</form>
</body>
</html>
