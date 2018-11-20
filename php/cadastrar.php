<?php


	$email = $_POST["EMail"];
	$senha = $_POST["Senha"];
	
	$xml = new DOMDocument("1.0");
	$novo_cadastro = $xml->createElement("Cadastro");
	$xml_email = $xml->createElement("EMail", $email);
	$xml_senha = $xml->createElement("Senha", $senha);
	
	$novo_cadastro->appendChild($xml_email);
	$novo_cadastro->appendChild($xml_senha);
	$xml->appendChild($novo_cadastro);

	$xml->save("../xml/criarCadastro.xml")

	echo "Usuario Cadastrado!";

?>