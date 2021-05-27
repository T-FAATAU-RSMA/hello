<?php
    include('class/langue.class.php');
    $langues = new langue();
    $res_langue = $langues->getlangue();

    if (isset($_POST['btnForm'])){
        if($_POST['btnForm'] == "Valider"){
            // echo "test"; Tester le boutton
            $etat = 'fermer';
            $name=$_POST['name'];
            $translate=$_POST['translate'];
            $langues->createlangue($name,$translate);
        }

        if($_POST['btnForm'] == "Supprimer"){
            // echo "test"; Tester le boutton
            $etat = 'fermer';
            $id=$_POST['id_langue'];
            $langues->deletelangue($id);
        }

        if($_POST['btnForm'] == "Modifier"){
            $etat = "ouvrir";
            $id_langue = $_POST['id_langue'];
        }

        if($_POST['btnForm'] == "Confirmer"){
            $etat = "fermer";
            $id_langue = $_POST['id_langue'];
            $new_name = $_POST['new_name'];
            $new_translate = $_POST['new_translate'];

            $langues->updatelangue($new_name,$new_translate,$id_langue);
        }
    }
    else{
        $etat="fermer";
    }



?>