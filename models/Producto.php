<?php

    class Producto{

        public function __construct(){
        }

        public function insertar($data){
            require_once "config/db.php";
            $consulta="insert into producto(`nombre`,`referencia`,`precio`,`peso`,`categoria`,`stock`,`fecha_creacion`)  values(". $data .",now())";
            $resultado=$conn->query($consulta);
            if ($resultado) {
                return true;
            }else {
                return false;
            }
        }

        public function mostrar($condicion){
            require_once "config/db.php";
            $query="select * from producto where ".$condicion.";";
            $row = mysqli_query($conn, $query);

            $this->producto=mysqli_fetch_row($row);
            return $this->producto;
        }

        public function mostrarTodo(){
            require_once "config/db.php";

            $query_allProducts = "SELECT * FROM producto ORDER BY nombre ASC";
            $rows = mysqli_query($conn, $query_allProducts);

            while($filas = mysqli_fetch_array($rows)) {
                $this->productos[]=$filas;
            }
            return $this->productos;
        }

        public function actualizar($data, $condicion){
            require_once "config/db.php"; 
            
            $consulta="update producto set ".$data." where ".$condicion;
            //var_dump($consulta);exit();
            $resultado=$conn->query($consulta);
            if ($resultado) {
                return true;
            }else {
                return false;
            }

        }
        public function eliminar($condicion){
            require_once "config/db.php";
            $eli="delete from producto where ".$condicion;
            $res=$conn->query($eli);
            if ($res) {
                return true; 
            }else {
                return false;
            }
        }
    }