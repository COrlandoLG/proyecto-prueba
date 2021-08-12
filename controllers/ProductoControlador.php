<?php

	require_once("models/Producto.php");

	class ProductoControlador{
		public $model;

		function __construct(){
	        $this->model=new Producto();
	    }

	    function index(){
	    	$data=$this->model->mostrarTodo();
	    	
			require_once("views/index.php");
	    }

	    function nuevo(){
	    	require_once("views/nuevo.php");	    	    	
	    }

	    function guardar(){
	    	$nombre =$_REQUEST['nombre'];
	    	$referencia =$_REQUEST['referencia'];
	    	$precio =$_REQUEST['precio'];
	    	$peso =$_REQUEST['peso'];
	    	$categoria =$_REQUEST['categoria'];
	    	$stock =$_REQUEST['stock'];
	        $data = "'".$nombre."','".$referencia."','".$precio."','".$peso."','".$categoria."','".$stock."'";
			$dato=$this->model->insertar($data);
			header("location:index.php");
	    }

	    function editar(){
	    	$id=$_REQUEST['id'];
	    	$dato=$this->model->mostrar("id=".$id);    	
	    	require_once("views/producto.php");
	    }

	    function update(){
	    	$id = $_REQUEST['id'];
	    	$nombre =$_REQUEST['nombre'];
	    	$referencia =$_REQUEST['referencia'];
	    	$precio =$_REQUEST['precio'];
	    	$peso =$_REQUEST['peso'];
	    	$categoria =$_REQUEST['categoria'];
	    	$stock =$_REQUEST['stock'];
	        $data = "nombre='".$nombre."', referencia='".$referencia."', precio=".$precio.", peso=".$peso.", categoria=".$categoria.", stock=".$stock;
	        $condicion = "id=".$id;
			$dato =	$this->model->actualizar($data,$condicion);
	        header("location:index.php");
		}

		function eliminar(){		
			$id=$_REQUEST['id'];    	
	        $condicion = "id=".$id;       
			$dato=$this->model->eliminar($condicion);
			header("location:index.php");
		}
	}