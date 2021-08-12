<?php

	require_once "layout.php";
    require "models/Enums.php";

?>


<div class="container">
	<h1>Lista de Productos</h1>
</div>


<div class="container">
	<table>
		<tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Referencia</th>
            <th scope="col">Precio(S/.)</th>
            <th scope="col">Peso(kg.)</th>
            <th scope="col">Categoría</th>
            <th scope="col">Stock</th>
            <th scope="col">Fecha de Creación</th>
            <th scope="col">Fecha Última Venta</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        <tbody>
        	<?php foreach($data as $row) { ?>
        		<tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['referencia'] ?></td>
                    <td><?php echo $row['precio'] ?></td>
                    <td><?php echo $row['peso'] ?></td>
                    <td><?php echo Enums::Categoria[$row['categoria']] ?></td>
                    <td><?php echo $row['stock'] ?></td>
                    <td><?php echo $row['fecha_creacion'] ?></td>
                    <td><?php echo $row['fecha_ultima_venta'] ?></td>
                    <td><a name="edit" id="" href="index.php?action=editar&id=<?php echo $row['id'] ?>" role="button"> Editar</a></td>
                    <td><a name="id" id="" href="index.php?action=eliminar&id=<?php echo $row['id'] ?>" role="button"> Eliminar</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <a name="" id="" href="index.php?action=nuevo" role="button">Agregar Producto</a>
</div>