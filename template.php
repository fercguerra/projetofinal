<html>
<head>
	<meta charset="utf-8">
	<title>Gerenciador de Agenda</title>
	<link rel="stylesheet" type="text/css" href="agendas.css">
</head>
<body>
	<h1> Gerenciador de Agenda: </h1>

	<?php include('formulario.php'); //incluir arquivo formulário.php ?>

	<?php if($exibir_tabela): //condição ternária ?>
		     <?php include('tabela.php'); //então incluir arq tabela.php ?>

		  <?php endif; // fim if da condição ternária ?>

</body>
</html>