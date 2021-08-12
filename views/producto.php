<?php 
	require "views/layout.php";
	require "models/Enums.php"
	 ?>

<div class="container">
<h1>Producto</h1>
<hr>

<form action="">
	<label for="">NOMBRE</label> <br>
	<input type="text" name="nombre" value="<?php echo $dato[1]; ?>"><br>
	<label for="">PRECIO</label><br>
	<input type="text" name="referencia" value="<?php echo $dato[2] ?>"><br>
	<label for="">PRECIO</label><br>
	<input type="text" name="precio" value="<?php echo $dato[3] ?>"> soles.<br>	
	<label for="">PESO</label><br>
	<input type="text" name="peso" value="<?php echo $dato[4] ?>"> Kgs.<br>	
	<label for="">CATEGORIA</label><br>

	<?php
		echo "<select name=\"categoria\">";
		foreach(Enums::Categoria as $value)
			echo "<option value=".array_search($value,Enums::Categoria).">$value</option>";
		echo "</select>";
	?><br>
	<label for="">STOCK</label><br>
	<input type="text" name="stock" value="<?php echo $dato[6] ?>"> Unidades.<br>	
	<input type="hidden" name="id">
	<input type="hidden" name="id" value="<?php echo $dato[0] ?>">
	<input type="submit" name="btn" value="ACTUALIZAR">
	<input type="hidden" name="action" value="update">
</form>
</div>