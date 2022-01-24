
<form action="complete.php?enviado=sim" method="POST" enctype="multipart/form-data" name="formulario">

<table border="1">
<tr>
<td>Código:</td>
<td><input type="text" name="codigo" value="" size="30" maxlength="30"></td>
</tr>
<tr>
<td>Nome:</td>
<td><input type="text" name="nome" style="background-color: green; font-size:18px; " size="30"></td>
</tr>
<tr>
<td>Modelo:</td>
<td>
<select name="cars" id="cars">
	<option value="none">Selecione uma opção</option>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes" >Mercedes</option>
  <option value="audi">Audi</option>
</select>
</td>
</tr>
<tr>
<td>Tipo:</td>
<td>
	<input type="radio" id="fabricado" name="suprimento" value="traficado">Fabricado<br>
	<input type="radio" id="fabricado" name="suprimento" value="roubado">Fabricado<br>
	<input type="radio" id="fabricado" name="suprimento" value="vendido">Fabricado<br>
	<input type="radio" id="fabricado" name="suprimento" value="fabricado">Fabricado<br>
</td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" value="Enviar" onclick="return validaForm()"></td>
</tr>		
</table>

</form>

<?php

$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$modelo = $_POST["cars"];
$tipo = $_POST["suprimento"];

echo $codigo . "<br>";
echo $nome  . "<br>";
echo $modelo  . "<br>";
echo $tipo  . "<br>";



?>
<button onclick="history.back()">Voltar</button>
