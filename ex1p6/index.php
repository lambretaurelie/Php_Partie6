<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
index.php?lastname=Nemare&firstname=Jean-->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice1</title>
    </head>
    <body>
        <?php
        if (isset($_GET['lastname'])) {
            echo '<p>Bonjour ' . $_GET['lastname'] . ' ';
        } else {
            echo '<p>';
        }
        if (isset($_GET['firstname'])) {
            echo $_GET['firstname'] . '</p>';
        } else {
            echo '</p>';
        }
        ?>
    </body>
</html>



