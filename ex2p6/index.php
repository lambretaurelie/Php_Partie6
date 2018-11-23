<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon 
le signaler : 
index.php?lastname=Nemare&firstname=Jean&age=32-->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice2</title>
    </head>
    <body>
        <?php
        if (isset($_GET['lastname'])) {
            echo '<p>Bonjour ' . $_GET['lastname'] . ' ';
        } else {
            echo '<p>';
        }
        if (isset($_GET['firstname'])) {
            echo $_GET['firstname'];
        } else {
            echo ' ';
        }
        if (isset($_GET['age'])) {
            echo ', vous avez ' . $_GET['age'] . ' ans</p>';
        } else {
            echo ', votre age n\'est pas renseigné</p>';
        }
        ?>
    </body>
</html>



