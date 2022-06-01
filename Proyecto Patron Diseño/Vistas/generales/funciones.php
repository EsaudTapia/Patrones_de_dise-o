<?php

//Marcar estatus como IS NULL
function fnc_valida_vacio($str_val)
{
	if($str_val == "0" or $str_val == "")
	{
		$valor = NULL;
	}
	else
	{
		$valor = $str_val;
	}
	
	return $valor;
}
?>