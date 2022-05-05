<?php

class Dbh
{
    protected function connect(){
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin;', 'root', '');
            return $dbh;
        } catch (PDOException $e) {
            print "Error" .$e->getMessage() . '<br>';
            die();
        }
    }

}