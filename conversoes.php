<?php
	

	function converter_data_para_banco($data)
	{
		if($data ==""){
			return "";
		}
		$dados = explode("/",$data);
		$data_mysql = "{$dados[2]}-{$dados[1]}-{$dados[0]}";

		return $data_mysql;
	}

	function converter_data_para_exibir($data)
	{
		if($data =="" or $data == "####-##-##"){
			return "";
		}

		$dados = explode("-",$data);
		$data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

		return $data_exibir;	
	}

	?>