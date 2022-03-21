<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Captcha</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

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
    height: 50%;
    padding: 20% 0px;
    position: relative;
}

.main {
    width: 360px;
    height: 213px;
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

button{
	background-color: #0d0d0d;
	color: white;
	margin: 0;
	height: 22px;
	width: 75px;
	margin-left: 210px;
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

<div class="wrapper">
<div class="main">

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="panel">
                    <hr>
                    <div class="panel-heading">
                    </div>
					<p style="margin-top: -2px; margin-left: -81px" class="font_2"> Entry Form </p>
                    <form style="margin-left: -81px" action="getting.php" method="post" autocomplete="off"
                        <div>
                            <img class="index" src="captcha.php" alt="Captcha Image"><br><br>
                            <input placeholder=" verification code" class="index" type="text" name="captcha" size="41" ><br><br>
							<button type="submit" name="submit" value="Submit Form">Submit Form</button>
                        </div>
                    </form>
                    <br><br><hr><br>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</form>	

</body>
</html>