<?php
//@author Alberto Bravo
class Usuario {

    private $con;

    public function comprobarUsuario($usuario) {

        $this->con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');

        $datos = array(':nombre' => $usuario);
        $sql = "select usuario from usuario where usuario=:nombre";
        $consulta = $this->con->prepare($sql);
        $consulta->execute($datos);
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        return $resultado['usuario'];
    }

}

?>