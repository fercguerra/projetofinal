<?php
   include "banco.php"; // incluir o arquivo banco.php

   remover_agenda($conexao,$_GET['id']); //chama a função remover_agenda

   header('Location: cadastrar_agendas.php');// direcionar para o arquivo cadastrar_agendas.php

?>
