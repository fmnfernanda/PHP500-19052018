<!-- Calculadora
Receba 2 numeros atraves de um formulario
Exibir resposta:
- Soma dos 2 numeros
- Subtracao dos 2 numeros
- Divisao dos 2 numeros
- Multiplicacao dos 2 numeros
- Escolhe que operacao vai fazer -->

<form method="POST" action="">

<p>Numero 1: <input type="number" name="num1" ></p>
<p>Numero 2: <input type="number" name="num2" ></p>

<select name="op">
	<option value="add">Add</option>
	<option value="sub">Sub</option>
	<option value="div">Div</option>
	<option value="mul">Mul</option>
</select>

<p><input type="submit" value="Calcular" ></p>	

</form>

<?php

if(!empty($_POST)){

	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$op = $_POST['op'];
	
	switch ($op){

	case'add':
	 echo 'Soma: '.($num1+$num2);
	 break;

	case'sub':
	 echo 'Subt: '.($num1-$num2);
	 break; 

	case 'div':
	 echo 'Divi: '.($num1/$num2);
	 break; 

	case'mul':
	 echo 'Mult: '.($num1*$num2);
	 break;  


	// echo '<p> Soma: '.($num1+$num2).'</p>';
	// echo '<p> Subt: '.($num1-$num2).'</p>';
	// echo '<p> Divi: '.($num1/$num2).'</p>';
	// echo '<p> Mult: '.($num1*$num2).'</p>';
	}
}

// echo '<pre>';

// print_r($_POST);
?>