<?php
require('connexion_bdd.php'); //connexion au serveur de base de données


    

    if (isset($_POST['btn'])) {

        if ($_POST['btn'] == "save") {

            $etat = "fermer";

            // récupérer les valeurs 
            $name = $_POST['langue']; //Variable $nom contient les données de l'input 'nom'

            $translate = $_POST['traduction']; //Variable $translate contient les données de l'input 'traduction'
            $sql = "INSERT INTO `langue`(`name`,`translate`) VALUES ('" . $name . "','" . $translate . "')";
            $connect_bdd->query($sql);
        }
    
    }
?>

<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS -->
    <link href="style.css" rel="stylesheet">


    <title>hello</title>

    <!-- BOOTSTRAP -->
    <!-- CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- JS -->
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/jquery-slim.min.js"></script>
    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/util.js"></script>
</head>


    <body>

        <div class="row">

            <div class="col-md-1">
                <?php

                echo'<label>';
                    echo'<u>';
                        echo'<b>';
                            echo'Ajouter:';
                        echo'</b>';
                    echo'</u>';
                echo'</label>';

                echo '<form method="POST">';

                    echo '<input type="text" name="langue" placeholder="Insérer langue">';
                echo '</p>';

                echo '<p>';
                    echo '<input type="text" name="traduction" placeholder="Insérer Traduction">';
                echo '</p>';

                echo '<p>';
                    echo '<input type="submit" name="btn" value="save"/>';

                echo '</form>';

                echo'<p>';

                
// --------------------------------------------------------------------------                
                
                
echo "<table>";

echo "<th>";
    echo "Nom";
echo "</th>";

echo "<th>";
    echo "Prix";
echo "</th>";

echo "<th>";
    echo "Actions";
echo "</th>";

// foreach ($res_listLivres as $valeur) { //Boucle : Pour chaque resultat 

// if (($etat == "ouvrir") && ($id_clique == $valeur['id'])) {

    echo '<form action="index.php" method="post">';
        echo "<input type='hidden' name='id_livre' value=" . $valeur['id'] . ">";
            echo "<tr>";

                echo "<td>";
                    echo "<input type='text' name='new_nom'  value='" . $valeur['nom'] . "'>";
                echo "</td>";

                echo "<td>";
                    echo "<input type='text' name='new_prix'  value='" . $valeur['prix'] . "'>";
                echo "</td>";

                echo "<td>";
                    echo "<input type='submit' name='btn' value='Confirmer'/>";
                echo "</td>";

            echo "<tr>";
    echo '</form>';


    // -------------------------------------------------------
// } else {

    echo "<tr>";

        echo "<td>";
            echo $valeur['nom'];
        echo "</td>";

        echo "<td>";
            echo $valeur['prix'];
        echo "</td>";

        echo "<td>";

            echo '<form action="index.php" method="post">';

                echo "<input type='submit' name='btn' value='Modifier'/>";
                echo "<input type='hidden' name='id_livre' value=" . $valeur['id'] . ">";

            echo '</form>';

            echo '<form action="index.php" method="post">';

                echo "<input type='hidden' name='id_livre' value=" . $valeur['id'] . ">";
                echo "<input type='submit' name='btn' value='Supprimer'/>";

            echo '</form>';

        echo "</td>";

    echo "</tr>";
    
}
}

echo "</table>";

} else { //sinon
//faire cela
echo "Il n'y a aucun résultats";
}
                
                ?>



            </div>

        </div>

    </body>

</html>