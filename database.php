<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 19/02/2018
 * Time: 21:52
 */

require_once ("config.php");

class Database {

    //variable connection.
    public $connection;

    //create methode open_db_connection

    /**
     *
     */
    public function open_db_connection(){
        //Paramétrer les propriétés de la connextion ($connection)par l'objet mysqli
        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        //Si Erreur
        if($this->connection->connect_errno){
            die("Connexion avec la Base de Données échouée" . $this->connection->connect_errno);
        }
    }
}
