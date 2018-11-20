<?php

	$id = $_POST["id"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	$retorno["id"] = "0";
	$retorno["email"] = "admin@projetomail.com";
	$retorno["senha"] = "2018";

	echo json_encode($retorno);
	
	$usuario_xml = file_get_contents("../xml/criarCadastro.xml");
	$xml = simplexml_load_string($usuario_xml);
	
	header('location: ../paginas/mail.html');

	$email
	

?>
