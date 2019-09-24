<html>
<head>
	<meta http-equiv="refresh" content="1"/>
	<style>
		p{
			color:black;
			font-size:90px;
			position: absolute;
			left:50%;
			align:center;
			transform: translate(-50%,-50%);
		}
		body{background-color: pink;}
	</style>
	<p> 
<?php 
date_default_timezone_set('Asia/Kolkata');
	echo date('d/m/y==h:i:s');?></p>
</head>
</html>
