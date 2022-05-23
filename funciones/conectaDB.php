
<?php

/*
  Clase conectDB con patrón Singleton y query PDO
  @author Alberto Bravo
 */

class ConectaDB {

//Sirve para que sólo se pueda tener una instancia de una clase. En este caso sólo podremos tener una conexión
    private $con;
    //2. CONTENEDOR para guardar la instancia que queremos (propiedad privada y estática)
    private static$instancia;

    //1. COSTRUCTOR DE ÁMBITO PRIVADO (o protegido)
    private function __construct() {
        try {
            $this->con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');
        } catch (PDOException $e) {
            die('Se ha producido un error' . $e->getMessage() . '<br>');
        }
    }

    public function __destruct() {
        $this->conexion = null;
    }

    //3. MÉTODO ESTÁTICO DONDE CREAMOS LA INSTANCIA, si no está ceada
    public static function singleton() {
        if (!isset(SELF::$instancia)) {
            SELF::$instancia = new ConectaDB;
        }
        return SELF::$instancia;
    }

    //4. REDEFINO EL MÉTODO MÁGICO __CLONE    
    public function __clone() {
        trigger_error('No se permite clonar este objeto', E_USER_ERROR);
    }

    public function getClave($usuario) {
        $datos = array(':nombre' => $usuario);
        $sql = "select clave from usuario where usuario=:nombre";
        $consulta = $this->con->prepare($sql);
        $consulta->execute($datos);
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        return $resultado['clave'];
    }

    public function getLdb($sql) {
        return $this->ldb->prepare($sql);
    }

    public function getLdb2() {
        return $this->ldb;
    }

}

?>