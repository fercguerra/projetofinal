<?php
   //*** definição das variáveis de conexão com o banco de dados
   $bdServidor = 'localhost';
   $bdUsuario  = 'root';
   $bdSenha    = '';
   $bdBanco    = 'bd_agenda';

   // variavel de conexao
   $conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdBanco);

   //** verificar se a função está sendo realizada.
   if(mysqli_connect_errno($conexao))
   {
   	 echo "Problemas para efetuar a conexão com o banco de dados !!!<br>";
   	 echo "Por favor, verifique suas configurações !!!";
   	 die();
   }


   // *** funções para manutenção no banco de dados.
   // *** Função para buscar agendas no banco de dados -- bd_agenda

   function buscar_agendas($conexao)
   {
   	 $sqlBusca = "SELECT * FROM tb_agenda";
   	 $resultado = mysqli_query($conexao,$sqlBusca);

   	 // *** criar vetor para armazenar o conteúdo que tiver no banco
   	 $agendas = array();

   	 // *** estutura de repetição 
   	 while ($agenda = mysqli_fetch_assoc($resultado))
   	 {
   	 	$agendas[] = $agenda;
   	 }// fim da estrutura de repetição

   	 // retorno da função
   	 return $agendas;
   	}// fim função buscar_Agendas


      // *********************************
      // *** função para localizar um registro no banco de dados bd_agenda
      // ************************************
      function buscar_agenda($conexao,$id)
   {
       // busca um determinado registro identificado pela var $id
       $sqlBusca = 'SELECT * FROM tb_agenda WHERE id = '.$id;
       $resultado = mysqli_query($conexao,$sqlBusca);

       // varrer o banco até encontrar o determinado registro
       return mysqli_fetch_assoc($resultado);
      }// fim função buscar_Agenda

   	// *********************************
   	// *** função para gravar um registro no banco de dados bd_agenda
   	// ************************************

   function gravar_agenda($conexao, $agenda)
   {
   	 // cria variável para gravar os dados no banco
   	 $sqlGravar = "
   	 	INSERT INTO tb_agenda
   	 	(nome,rg,endereco,nascimento,telefone,email)
   	 	VALUES
   	 	('{$agenda['nome']}',
   	 	 '{$agenda['rg']}',
          '{$agenda['endereco']}',
          '{$agenda['nascimento']}',
          '{$agenda['telefone']}',
          '{$agenda['email']}'

          )";

     // função para gravar os dados na tabela
	 mysqli_query($conexao,$sqlGravar);
   }

	function editar_agenda($conexao, $agenda)
   {
   	 // cria variável para Editar os dados no banco
   	 $sqlEditar = "
   	 	UPDATE tb_agenda SET
   	 	nome     = '{$agenda['nome']}',
   	 	rg       = '{$agenda['rg']}',
         endereco = '{$agenda['endereco']}',
         nascimento = '{$agenda['nascimento']}',
         telefone = '{$agenda['telefone']}',
         email = '{$agenda['email']}'
   	 	WHERE id =  {$agenda['id']}";

         

     // função para atualizar os dados na tabela
	 mysqli_query($conexao,$sqlEditar);
   
   }// fim function editar_agenda

   // *** função para remover um registro da agenda no banco de dados
   function remover_agenda($conexao,$id)
   {
   	 // criar variável para  remoção no BD
   	 $sqlRemover = "DELETE FROM tb_agenda WHERE id = {$id}";

   	 // função para remover do banco
   	 mysqli_query($conexao,$sqlRemover);
   
   }// fim function remover_agenda

   ?>
