<?php

	//inicio da sessão session
	session_start();

	//incluir os arquivos banco.php e conversoes.php
	include "banco.php";
	//include "conversoes.php";

	//controle de amostra da tabela
	$exibir_tabela = true;
	

	// sobre a $_GET['nome']
	if(isset($_GET['nome']) && $_GET['nome'] != '')
	{
		// criar váriavel vetorial agenda
		$agenda = array();

		$agenda['id'] = $_GET['id'];
		$agenda['nome'] = $_GET['nome'];

		// sobre a $_GET['rg']
		if(isset($_GET['rg']))
		{
			$agenda['rg'] = $_GET['rg'];
		}
		else
		{
			$agenda['rg'] = '';
		}

		//sobre a $_GET['endereco']
		if(isset($_GET['endereco']))
		{
			$agenda['endereco'] = $_GET['endereco'];
		}
		else
		{
			$agenda['endereco'] = '';
 		}

 		//sobre a $_GET['nascimento']
 		if(isset($_GET['nascimento']))
 		{
 			$agenda['nascimento'] = $_GET['nascimento'];
 		}
 		else
 		{
 			$agenda['nascimento'] = '';
 		}

 		//sobre a &_GET['telefone']
 		if (isset($_GET['telefone'])) 
 		{
 			$agenda['telefone'] = $_GET['telefone'];
 		}
 		else
 		{
 			$agenda['telefone'] = "";
 		}

 		// sobre a &_GET['email']
 		if (isset($_GET['email'])) 
 		{
 			$agenda['email'] = $_GET['email'];	
 		}
 		else
 		{
 			$agenda['email'] = "";
 		}

		//chamar a função para editar no banco de dados
		editar_agenda($conexao,$agenda);

		//redireciona para o arquivo cadastrar_agendas.php
		header('Location: cadastrar_agendas.php');

		// finalizo toda a conexão com o banco de dados
		die();

	}// fim if(isset($_GET['nome']) && $_GET['nome'] != '')

	$agenda = buscar_agenda($conexao,$_GET['id']);

	include "template.php";

?>
