<?php
//@author Alberto Bravo
//Creado para utilizar en formularios.php
include_once 'singleton.php';
class Usuario {

    private $con;

    public function comprobarUsuario($usuario) {

        //$this->con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');
        $this->con = Singleton::singleton();


        $datos = array(':nombre' => $usuario);
        $sql = "select usuario from usuario where usuario=:nombre";
        //$consulta = $this->con->prepare($sql);
        $consulta = $this->con->getLdb($sql);
        $consulta->execute($datos);
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        return $resultado['usuario'];
    }

}

?>