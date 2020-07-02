<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <?php
            $historique_commande = array (5.49,9.99,5.49,15.99,25);
            
            foreach ($historique_commande as $element) {
                echo $element . "<br/>" ;
             }
             
            function afficher_commande ($historique_commande) { 
                echo "<p> La commande de $historique_commande[0] euros a été reçus. </p>";
                echo "<p> La commande de $historique_commande[1] euros a été reçus. </p>";
                echo "<p> La commande de $historique_commande[2] euros a été reçus. </p>";
                echo "<p> La commande de $historique_commande[3] euros a été reçus. </p>";
                echo "<p> La commande de $historique_commande[4] euros a été reçus. </p>";
                echo "<p> Le total des commandes est de $historique_commande euros. </p>";
            }
            afficher_commande ($historique_commande);
        ?>
    </body>
</html>