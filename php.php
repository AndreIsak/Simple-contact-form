<?php
	
	$nome = $_POST["nome"];
	$morada = $_POST["morada"];
	$email = $_POST["email"];
	$genero = $_POST["genero"];
	$hab = $_POST['hab'];
	$ling = array();
	if( isset($_POST["ling"])){
		$ling = $_POST["ling"];
	}
	$obs = $_POST['obs'];

	echo 'Nome: ' .$nome.'<br>';
	echo 'Morada: ' .$morada.'<br>';
	echo 'Email: ' .$email.'<br>';
	echo 'Género: ' .$genero.'<br>';
	echo 'Habilitações: ' .$hab.'<br>';
	echo 'Linguagens:';
		for($i = 0;$i < count($ling); $i++){
			echo $ling[$i]."";
		}
	echo '<br>Observações: ' .$obs.'<br>';

?>