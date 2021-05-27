
<?php
    include('assets/php/function.php');
?>
<html>
    <head>
        <title>ADMIN</title>
         <!-- BOOTSTRAP -->
        <!-- CSS -->
        <link rel="stylesheet" href="./assets/styles/style.css">
        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- JS -->
        <script src="assets/bootstrap/js/popper.min.js"></script>
        <script src="assets/bootstrap/js/jquery-slim.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.js"></script>
        <script src="assets/bootstrap/js/util.js"></script>
    </head>
    <body>
        <a href="index.php">Pannel Utilisateur</a>

        <div class="row">
            <div class="col-md-6">
                <?php
                    if ($res_langue->num_rows > 0){
                        
                        echo "<table>";

                            echo "<th>";
                                echo "Nom";
                            echo "</th>";

                            echo "<th>";
                                echo "Traductions";
                            echo "</th>";

                            echo "<th>";
                                echo "Actions";
                            echo "</th>";


                            foreach ( $res_langue as $valeur){
                                if (($etat == "ouvrir") && ($id_langue == $valeur['id'])) {
                                    
                                    echo '<form action="index_admin.php" method="post">';
                                        echo "<input type='hidden' name='id_langue' value=" . $valeur['id'] . ">";
                                            echo "<tr>";
        
                                                echo "<td>";
                                                    echo "<input type='text' name='new_name'  value='" . $valeur['name'] . "'>";
                                                echo "</td>";
        
                                                echo "<td>";
                                                    echo "<input type='text' name='new_translate'  value='" . $valeur['translate'] . "'>";
                                                echo "</td>";
        
                                                echo "<td>";
                                                    echo "<input type='submit' name='btnForm' value='Confirmer'/>";
                                                echo "</td>";
        
                                            echo "<tr>";
                                    echo '</form>';
        
        
                                    // -------------------------------------------------------
                                } else {
        
                                    echo "<tr>";
        
                                        echo "<td>";
                                            echo $valeur['name'];
                                        echo "</td>";
        
                                        echo "<td>";
                                            echo $valeur['translate'];
                                        echo "</td>";
        
                                        echo "<td>";
        
                                            echo '<form action="index_admin.php" method="post">';
        
                                                echo "<input type='submit' name='btnForm' value='Modifier'/>";
                                                echo "<input type='hidden' name='id_langue' value=" . $valeur['id'] . ">";
        
                                            echo '</form>';
        
                                            echo '<form method="post">';
        
                                                echo "<input type='hidden' name='id_langue' value=" . $valeur['id'] . ">";
                                                echo "<input type='submit' name='btnForm' value='Supprimer'/>";
        
                                            echo '</form>';
        
                                        echo "</td>";
        
                                    echo "</tr>";
                                    
                                }
                            }

                        echo "</table>";
                    }
                ?>
            </div>

        <div class="col-md-6">
            <label>
                <u>
                    <b>
                        CREER UN LIVRES
                    </b>
                </u>
            </label>

            <form method="POST">  
                <p>
                    <u><b>Ajouter un livre</b></u>
                </p>
                <p>
                    <input type="text" name="name" placeholder="Nom de la langue">
                </p>
                <p>
                    <input type="text" name="translate" placeholder="Traduction">
                </p>
                <p>
                    <input type="submit" name="btnForm" value="Valider">
                </p>
            </form>
        </div>

    </body>

</html>