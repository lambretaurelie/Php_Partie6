<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
index.php?building=12&room=101-->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice6</title>
    </head>
    <body>
        <?php
        if (isset($_GET['building'])) {
            echo '<p>Bâtiment ' . $_GET['building'] . ' ';
        } else {
            echo '';
        }
        if (isset($_GET['room'])) {
            echo ',chambre ' . $_GET['room'] . '</p> ';
        } else {
            echo '</p>';
        }
        ?>
    </body>
</html>


