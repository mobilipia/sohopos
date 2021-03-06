<?php header('Content-type: text/css'); ?>
body#login{
	background-color: #111;
}
body#login > form#login{
	position: absolute;
	width: 600px;
	height: 300px;
	margin: -180px 0 0 -330px;
	padding: 30px;
	top: 50%;
	left: 50%;
	background-color: #333;
	color: #FFF;
	border-top: 1px solid #333;
	border-bottom: 1px solid #555;
	border-radius: 3px;
	background-image: url("../../../res/img/texture.png");
}
body#login > form#login img#logo{
	margin: 0 auto;
	clear: both;
}
body#login > form#login input[type=text], body#login > form#login input[type=password]{
	margin-top: 15px;
	border: 4px solid;
	-moz-border-image: url('../../../res/img/input-text-corners.png') 4 4 4 4 repeat;
	-webkit-border-image: url('../../../res/img/input-text-corners.png') 4 4 4 4 repeat;
	border-image: url('../../../res/img/input-text-corners.png') 4 4 4 4 repeat;
	color: #777;
}
body#login > form#login input[type=text]:focus, body#login > form#login input[type=password]:focus{
	border: 4px solid;
	-moz-border-image: url('../../../res/img/input-text-corners-selected.png') 4 4 4 4 repeat;
	-webkit-border-image: url('../../../res/img/input-text-corners-selected.png') 4 4 4 4 repeat;
	border-image: url('../../../res/img/input-text-corners-selected.png') 4 4 4 4 repeat;
	color: #FFF;
}
body#login > form#login input[type=submit]{
	margin-top: 20px;
	padding: 5px 10px;
	background-color: #222;
	color: #FFF;
	border-bottom: 1px solid #444;
	border-radius: 3px;
}
body#login > form#login p.credits{
	position:absolute;
	width: 580px;
 	bottom: 20px;
	font-size: 0.8em;
	color: #AAA;
}
body#login > form#login span#logerror{
	display: none;
	margin: 20px 0 -30px 0;
	font-size: 0.8em;
	color: #F00;
}
