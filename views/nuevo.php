<?php require "views/layout.php";require "models/Enums.php"; ?>

<div class="container">
	<h1>Agregar Producto</h1>
	<hr>
	<form action="">
		<label for="">NOMBRE</label> <br>
		<input type="text" name="nombre"><br>
		<label for="">REFERENCIA</label><br>
		<input type="text" name="referencia"><br>	
		<label for="">PRECIO</label><br>
		<input type="text" name="precio"> soles.<br>	
		<label for="">PESO</label><br>
		<input type="text" name="peso"> Kgs.<br>	
		<label for="">CATEGORIA</label><br>
		<?php
			echo "<select name=\"categoria\">";
			foreach(Enums::Categoria as $value)
				echo "<option value=".array_search($value,Enums::Categoria).">$value</option>";
			echo "</select>";
		?><br>	
		<label for="">STOCK</label><br>
		<input type="text" name="stock"> Unidades.<br>	
		<input type="hidden" name="id">
		<input type="submit" name="btn" value="CREAR">
		<input type="hidden" name="action" value="guardar">
	</form>
</div>