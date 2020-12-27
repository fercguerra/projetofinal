<table>
	<tr>
		<th>Nome</th>
		<th>RG</th>
		<th>Endereço</th>
		<th>Nascimento</th>
		<th>Telefone</th>
		<th>E-mail</th>
	</tr>
   <?php if (is_array($lista_agendas) || is_object($agenda)) // solução para não dar warning do foreach !!!
   {
	   foreach($lista_agendas as $agenda): ?>
	   <tr>
	      <td><?php echo $agenda['nome'];?></td>
	      <td><?php echo $agenda['rg'];?></td>
	      <td><?php echo $agenda['endereco'];?></td>
	      <td><?php echo converter_data_para_exibir($agenda['nascimento']);?></td>
	      <td><?php echo $agenda['telefone'];?></td>
	      <td><?php echo $agenda['email'];?></td>


	      <td><a href="editar.php?id=<?php echo $agenda['id'];?>">Editar</a></td>
	      <td><a href="remover.php?id=<?php echo $agenda['id'];?>">Remover</a></td>

	   </tr>
	<?php endforeach; 
	} ?>
</table>
