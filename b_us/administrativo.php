<?php
session_start();
if(!empty($_SESSION['id'])){
	header("Location: motor_conect.php");
	echo "<a href='sair.php'>Sair</a>";
}else{
	$_SESSION['msg'] = "Área restrita";
	header("Location: index.php");	
}
