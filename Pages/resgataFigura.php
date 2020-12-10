<?php
	function resgataUparm($indice)
	{
		switch ($indice)
		{
			case 1:
				$caminho = 'src="../Imagens/rula/uparm1.png"';
				break;
			case 2:
				$caminho = 'src="../Imagens/rula/uparm2a.png"';
				break;
			/*case 2:
				$caminho = '../Imagens/rula/uparm2b.png';
				break;*/
			case 3:
				$caminho = 'src="../Imagens/rula/uparm3.png"';
				break;
			case 4:
				$caminho = 'src="../Imagens/rula/uparm4.png"';
				break;
		}
		return $caminho;
	}
	
	function resgataLwarm($indice)
	{
		switch ($indice)
		{
			case 1:
				$caminho = 'src="../Imagens/rula/lwarm1.png"';
				break;
			case 2:
				$caminho = 'src="../Imagens/rula/lwarm2.png"';
				break;
		}
		return $caminho;
	}

	function resgataWrist($indice)
	{
		switch ($indice)
		{
			case 1:
				$caminho = 'src="../Imagens/rula/wrist1.png"';
				break;
			case 2:
				$caminho = 'src="../Imagens/rula/wrist2.png"';
				break;
			case 3:
				$caminho = 'src="../Imagens/rula/wrist3.png"';
				break;
		}
		return $caminho;
	}

	function resgataNeck($indice)
	{
		switch ($indice)
		{
			case 1:
				$caminho = 'src="../Imagens/rula/neck1.png"';
				break;
			case 2:
				$caminho = 'src="../Imagens/rula/neck2.png"';
				break;
			case 3:
				$caminho = 'src="../Imagens/rula/neck3.png"';
				break;
			case 4:
				$caminho = 'src="../Imagens/rula/neck4.png"';
				break;
		}
		return $caminho;
	}
	function resgataTrunk($indice)
	{
		switch ($indice)
		{
			case 1:
				$caminho = 'src="../Imagens/rula/trunk1.png"';
				break;
			case 2:
				$caminho = 'src="../Imagens/rula/trunk2.png"';
				break;
			case 3:
				$caminho = 'src="../Imagens/rula/trunk3.png"';
				break;
			case 4:
				$caminho = 'src="../Imagens/rula/trunk4.png"';
				break;
		}
		return $caminho;
	}

?>