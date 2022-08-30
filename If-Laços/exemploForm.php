

<form>
	
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="OK">

</form>

<?php

//Como nao foi informado o method o padrão a ser enviado é GET

if(isset($_GET)){
	foreach ($_GET as $key => $value) {
		
		echo "Nome do campo: " . $key . "<br/>" . "Valor digitado: " . $value . "<hr>";
	}
}

?>