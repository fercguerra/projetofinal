<form>
	<input type="hidden" name="id"
	      value="<?php echo $agenda['id'];?>">

	<fieldset>
	   <legend>Novo Contato da Agenda</legend>
	   <label>
	      Contato da Agenda:
	      <?php $tem_erros = false; ?>
	      <?php if($tem_erros && isset($erros_validacao['nome'])): ?>
	               <span class="erro">
	                  <?php echo $erros_validacao['nome'];?>
	               </span>
	      <?php endif; ?>

	      <input type="text" name="nome"
	            value="<?php echo $agenda['nome'];?>">
	   </label>

	   <label>
	      RG:
	      <input type="text" name="rg"
	            value="<?php echo $agenda['rg'];?>">	
	   </label>

	   <label>
	   	 Endereço:
	   	 <input type="text" name="endereco"
	   	 		value="<?php echo $agenda['endereco'];?>">
	   </label>

	   <label>
	   	Data de Nascimento:
	   	<input type="date" name="nascimento"
	   			value="<?php echo $agenda['nascimento'];?>">
	   </label>

	   <label>
	   	Telefone:
	   	<input type="text" name="telefone"
	   		   value="<?php echo $agenda['telefone'];?>">

	   </label>

	   <label>
	   	E-mail:
	  	<input type="text" name="email"
	  		   value="<?php echo $agenda['email'];?>">
	   </label> 

	   <input type="submit"
	         value="<?php echo ($agenda['id'] >0) //condição ternária
	         			    ? 'Atualizar' // então verdade
	         			    : 'Cadastrar' // senão falso
	         ;?>">
	</fieldset>
</form>