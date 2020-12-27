<?php

   //inicio da sessão session
   session_start();

   // incluir os arquivos banco.php e conversoes.php
   include "banco.php";
   include "conversoes.php";

   $exibir_tabela = true;


   //comparar se existe o atributo nome no formulário
   if(isset($_GET['nome']) && $_GET['nome']!= '')
   {
   	 // definição da var vetorial
   	 $agenda = array();

   	 $agenda['nome'] = $_GET['nome'];

   	 //sobre a variável rg
   	 if(isset($_GET['rg']))
   	 {
   	 	$agenda['rg'] = $_GET['rg'];
   	 }
   	 else
   	 {
   	 	$agenda['rg'] = "";
   	 }

       //sobre a variavel endereco
       if(isset($_GET['endereco']))
       {
         $agenda['endereco'] = $_GET['endereco'];
       }
       else
       {
         $agenda['endereco'] = "";
       }

       //sobre a variavel nascimento

       if(isset($_GET['nascimento']))
       {

         $agenda['nascimento'] = $_GET['nascimento'];
       }
       else
       {
         $agenda['nascimento'] = "";
       }

       //sobre a variavel telefone

       if(isset($_GET['telefone']))
       {
         $agenda['telefone'] = $_GET['telefone'];
       }
       else
       {
         $agenda['telefone'] = "";
       }

       //sobre a variavel email

       if(isset($_GET['email'])) 
       {
          $agenda['email'] = $_GET['email'];
       }
       else
      {
         $agenda['email'] = "";
      }


   	 // comando para gravar os dados no banco de dados
   	 gravar_agenda($conexao,$agenda);
   	 header("Location: cadastrar_agendas.php");
   	 die();
   
   } //fim do if(isset($_GET['nome']) && $_GET['nome']!= '')

   // lista agendas gravadas no banco de dados
   $lista_agendas = buscar_agendas($conexao);

   // cadastrar os dados no vetor para gravar
   $agenda = array(
      'id'		=> 0,
      'nome' 	=> '',
      'rg'		=> '',
      'endereco' => '',
      'nascimento' => '',
      'telefone' =>'',
      'email' =>''
      );

   include "template.php";
?>
 