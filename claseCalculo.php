<?php 

class calculadora{
 
public function calcularDados($val1, $val2, $opcao){
	switch ($opcao) {
		case 'somar':
			return $val1 + $val2;
			break;
			case 'subtrair':
			return $val1 - $val2;
			break;
			case 'multiplicar':
			return $val1 * $val2;
			break;
			case 'dividir':
			return $val1 / $val2;
			break;
		
		default:
			# code...
			break;
	}
}	

}


?>