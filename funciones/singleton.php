
<?php
/*
Patrón Singleton
@author Alberto Bravo
*/
class Singleton {

//Sirve para que sólo se pueda tener una instancia de una clase. En este caso sólo podremos tener una conexión
    private $ldb;
    //2. CONTENEDOR para guardar la instancia que queremos (propiedad privada y estática)
    private static$instancia;

    //1. COSTRUCTOR DE ÁMBITO PRIVADO (o protegido)
    private function __construct() {
        try {
            $this->ldb = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');
        } catch (PDOException $e) {
            die('Se ha producido un error' . $e->getMessage() . '<br>');
        }
    }

    //3. MÉTODO ESTÁTICO DONDE CREAMOS LA INSTANCIA, si no está ceada
    public static function singleton() {
        if (!isset(SELF::$instancia)) {
            SELF::$instancia = new Singleton;
        }
        return SELF::$instancia;
    }

    //4. REDEFINO EL MÉTODO MÁGICO __CLONE    
    public function __clone() {
        trigger_error('No se permite clonar este objeto', E_USER_ERROR);
    }

    //Me sirve para que la conexión a la base de datos pueda ser llamada desde otra clase y así poder hacer la consulta
    public function getLdb($sql) {
        return $this->ldb->prepare($sql);
    }

}
?>