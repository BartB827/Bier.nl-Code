<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Naamloos document</title>
</head>

<body>

<?php session_start(); 

if(!session_is_registered('loggedin')); {

header('location:tickets.phtml');
	
}


?>

</body>
</html>
