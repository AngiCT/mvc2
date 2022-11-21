<?php

class Login{

    protected $nombreusu = null; //se debe llamar igual que la columna
    protected $password = null;
    //recuperar filas
    /*
        1- preparar la consulta -> prepare
        2- establecer el modo de recuperación: FETCH_CLASS, FETCH_ASSOC
        3- ejedcutar la consulta -> execute
        4- Recuperar los registros : fetch (un registro) / fecthAll (devuelve todos los registros)
    */
    public static function all(){
        $dsn = "mysql:host=db;dbname=demo";
        $usuario = "dbuser";
        $password = "secret";

        try {
            $db = new PDO($dsn, $usuario, $password);
            //Establece el nivel de error que muestra en la conexión
            $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = 'SELECT * FROM credenciales';
            $sentencia = $db->prepare($sql);
            //establece la forma de recuperar registros.
            $sentencia->setFetchMode(PDO::FETCH_CLASS, 'Login');
            $sentencia->execute(); //3 ejecuta la sentencia

            /*
            while($obj = $sentencia->fetch()){
                //print_r($obj);
                echo '<br>NOMBRE : ' . $obj->nombreusu;
                echo '<br>CONTRASEÑA: ' . $obj->password;
                
            }*/
            $credenciales = $sentencia->fetchAll(PDO::FETCH_CLASS,'Login');
            foreach($credenciales as $credencial){
                echo '<br>NOMBRE : ' . $credencial->nombreusu;
                echo '<br>CONTRASEÑA : ' . $credencial->password;
            }
        } catch (PDOException $e) {
            echo '<br>Error conexion : ' . $e->getMessage();
        }
    }
}
echo '<h2>Recuperando registros</h2>';
Login::all();