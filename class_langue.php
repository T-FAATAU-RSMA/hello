<?php
include("connexion_bdd.php");

    class langue{

        public function getlangue(){
            global $connect_bdd;

            $sql = "SELECT * from langue" ; //$sql : contient la requete sql 
            $result_langue = $connect_bdd->query($sql); //$result : execute la requete $sql
            return $result_langue;
        }
        
}