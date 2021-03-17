<?php

//sampy_mail_test - root - ''
class Connect {

    public static function db_connect() {

        $conn = new mysqli('localhost','root','','stampy_mail_test');

        if($conn){
            return $conn;
        }else{
            return 'Error: No hay conexión a la base de datos de Stampy Mail Test.';
        }

    }

}



/*
 * id, username, email, password, name, created_at, isActive
 */