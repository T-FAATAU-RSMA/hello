<?php
    include('class/langue.class.php');
    $langues = new langue();
    $res_langue = $langues->getlangue();

// =========================
// gestion des boutons
// =========================

    // si bouton == Valider
    if (isset($_POST['btnForm'])){
        if($_POST['btnForm'] == "Valider"){
            // echo "test"; Tester le boutton
            $etat = 'fermer';
            $name=$_POST['name'];
            $translate=$_POST['translate'];
            // j"execute ma requête Valider
            // dans ma fonction createlangue
            $langues->createlangue($name,$translate);
        }
        // si bouton == Supprimer
        if($_POST['btnForm'] == "Supprimer"){
            $etat = 'fermer';
            $id=$_POST['id_langue'];
            // j"execute ma requête Supprimer
            // dans ma fonction deletelangue
            $langues->deletelangue($id);
        }
        // si bouton == Modifier
        if($_POST['btnForm'] == "Modifier"){
            $etat = "ouvrir";
            $id_langue = $_POST['id_langue'];
        }

        if($_POST['btnForm'] == "Confirmer"){
            $etat = "fermer";
            $id_langue = $_POST['id_langue'];
            $new_name = $_POST['new_name'];
            $new_translate = $_POST['new_translate'];
            // j"execute ma requête Confirmer
            // dans ma fonction updatelangue
            $langues->updatelangue($new_name,$new_translate,$id_langue);
        }
    }
    else{//sinon 
        //faire cela
        $etat="fermer";
    }



?>