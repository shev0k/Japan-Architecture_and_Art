<?php 
    
    session_start();
    $captcha = $_POST['captcha'];
    $check = false;

    if (isset($_SESSION['captcha'])) {
        if ($captcha == $_SESSION['captcha']) {
            $check = true;
        }
        unset($_SESSION['captcha']);
    }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Wrong Captcha</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<style>

.clearfix {
    display: block;
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
    height: 50%;
    padding: 20% 0px;
    position: relative;
}

.logo {
    width: 250px;
    height: 101px;
    margin: 22px 1px 1px 0px;
    background-image: url(images/teehee.gif);
}

.main {
    width: 520px;
    height: 148px;
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
	padding-left: 3px;
	float:right;
	max-width:320px;
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

.font_2 {
	font: 	normal normal normal 
			18px
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
	<div class="wrapper">
	<div class="main">
    <div class="container">
	<div class="logo" style="margin-left:-170px"></div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="panel">
                    <hr>
                    <div style="text-align: center;">
                        <?php if ($check): ?>
                           <?php header('Location: login.php'); ?>
                        <?php else: ?>
                            <div><h3 style="margin-top: -115px; margin-right: -90px" class="font_2">Wrong captcha!</h3></div>
                        <?php endif ?>
                        <br>
						<a style="margin-right:-90px; text-decoration:none" href="index.php" class="button2">Try Again</a></button>
                        <hr><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>
</body>
</html>