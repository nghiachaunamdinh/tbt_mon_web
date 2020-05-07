<?php
session_start();
if(isset($_SESSION['x'])){
	$_SESSION['x'] +=1;
}
else{
	$_SESSION['x'] =1;
}
echo ($_SESSION['x']);
?>