<?php

include "conecta_banco.php";
	session_start();
	$admin=$_SESSION['nomeUser'];
	
	if(isset($_POST)){
		
		$email=$_POST['emailAdmin'];
		
		// $conversao = array('�' => 'c', '�' => 'C', '�' => 'a', '�' => 'a', '�' => 'a', '�' => 'a', '�' => 'e', '�' => 'e', '�' => 'e', '�' => 'i', '�' => 'i', '�' => 'i', '�' => 'i', '�' => 'o', '�' => 'o', '�' => 'o', '�' => 'o', '�' => 'o', '�' => 'u', '�' => 'u', '�' => 'u', '�' => 'A', '�' => 'A', '�' => 'E', '�' => 'E', '�' => 'E', '�' => 'I', '�' => 'I', '�' => 'I', '�' => 'I', '�' => 'O', '�' => 'O', '�' => 'O', '�' => 'O', '�' => 'O', '�' => 'U', '�' => 'U', '�' => 'U');
		// $email = strtr($nome, $email);
	//	UPDATE `user` SET `senha` = 'senha0' WHERE `user`.`id` = 12
		
		$sql2=$dbcon->query("UPDATE user set email='$email' where nome = 'Administrador'");
		if($sql2){
			echo "<script>alert('Email alterado com sucesso');</script>";
			header('Location:sair.php');
		}else{
			echo "<script>alert('Erro: Email nao alterado');</script>";
			echo "<script>location.href='../admin.php'</script>";
		}
	}
?>