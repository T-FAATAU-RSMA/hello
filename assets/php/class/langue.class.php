<?php
include __DIR__."./../connexion_bdd.php";

    class langue{

        //Recuperer tout les langues
        public function getlangue(){
            global $connect_bdd;

            $sql = "SELECT * from langue" ; //$sql : contient la requete sql 
            $result_langue = $connect_bdd->query($sql); //$result : execute la requete $sql
            return $result_langue;
        }

        //Supprimer une langue
        public function deletelangue($id){
            global $connect_bdd;

            $sql = "DELETE from langue WHERE id=".$id ; //$sql : contient la requete sql 
            $connect_bdd->query($sql); //$result : execute la requete $sql
        }

        //Mettre a jour une langue
        public function updatelangue($new_name,$new_translate,$id_langue){
            global $connect_bdd;

            $sql_update = "UPDATE `langue` SET `name`= '".$new_name."',`translate`= '".$new_translate."' WHERE id =".$id_langue; //$sql : contient la requete sql
            $connect_bdd->query($sql_update);//$result : execute la requete $sql

        }

        //Créer une nouvelle langue
        public function createlangue($name,$translate){
            global $connect_bdd;
            $sql = "INSERT INTO `langue`(`name`,`translate`) VALUES ('".$name."' , '".$translate."' )";//$sql : contient la requete sql
            $connect_bdd->query($sql); //$result : execute la requete $sql
        }
        
}