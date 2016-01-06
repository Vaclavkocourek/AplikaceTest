<DOCTYPE html>

<?php


if ($_POST['user'] === "warp" && $_POST['pwd'] === "123"){
	echo "Ahoj Vasku";
}
else {
	echo("<h1>spatne jmeno nebo heslo</h1>");
	include('index.php');
	
}

?>
