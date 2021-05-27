<?php
    require('assets/php/connexion_bdd.php'); //connexion au serveur de base de données
    include('assets/php/function.php');
?>

<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS -->
    <link href="C:\xampp\htdocs\langue\assets\styles\style.css" rel="stylesheet">


    <title>hello</title>

    <!-- BOOTSTRAP -->
    <!-- CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- JS -->
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/jquery-slim.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/util.js"></script>
</head>


    <body>
        <a href="index_admin.php">
            Pannel Administrateur
        </a>

        <div class="row">
            <div class="col-md-3">
                <label>
                <u>
                    <b>
                    Choix de langue
                    </b>
                </u>
                </label>   
                <?php
                    // <!--  SELECT POUR CHOIX DE LANGUE    -->
                    echo '<form  method="POST" action="index.php">';

                        echo '<u>';
                            echo '<p>';
                                echo 'Remplir les champs ci-dessous:';
                            echo '</p>';
                        echo '</u>';

                        echo'<p>';

                            if ($res_langue->num_rows > 0) {
                                echo '<select name="selectLangue" >';

                                foreach ($res_langue as $k => $v){
                                    echo"<option value=".$v["translate"].">".$v["name"]."</option>";
                                }
                                echo '</select>';
                            }
                        echo'</p>';

                        echo '<p>';
                        // CHOIX DE NOM 
                            echo '<input type="text" name="nom" placeholder="Nom">';
                        echo '</p>';

                        echo '<p>';
                            echo '<input type="submit" name="btnValider" value="Valider">';
                        echo '</p>';

                        if (isset($_POST['btnValider'])) {
                            $nom = $_POST['nom'];
                            $translate = $_POST['selectLangue'];
            
                            echo "<textarea>";
                            echo $translate." ";
                            echo $nom;
                            echo "</textarea>";
                        }
                    echo '</form>';
                ?>
            </div>
        </div>
    </body>
</html>