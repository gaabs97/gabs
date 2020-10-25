<?php
session_start();
include_once("conexao.php");
$btnSelect = filter_input(INPUT_POST, 'btnSelect', FILTER_SANITIZE_STRING);
if($btnSelect){
	$usuario = filter_input(INPUT_POST, 'btnSelect', FILTER_SANITIZE_STRING);
	if((!empty($usuario))){

		$result_usuario = "SELECT func FROM usuarios WHERE usuario='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($usuario, $row_usuario['select'])){
				$_SESSION['select'] = motor;
				header("Location: motor.php");
			}else{
				$_SESSION['msg'] = "Login e senha incorreto!";
				header("Location: index.php");
			}
		}
	}else{
		$_SESSION['msg'] = "Login e senha incorreto!";
		header("Location: index.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: index.php");
}
