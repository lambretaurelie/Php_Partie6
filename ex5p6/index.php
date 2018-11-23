<!--<To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
index.php?week=12-->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice5</title>
    </head>
    <body>
        <?php
        if (isset($_GET['week'])) {
            echo '<p>Numéro de semaine ' . $_GET['week'] . '</p> ';
        } else {
            echo '';
        }
        ?>
    </body>
</html>
