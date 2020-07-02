<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <?php
            $historique_commande = array (5.49,9.99,5.49,15.99,25);
            
            foreach ($historique_commande as $element) { }

            function afficher_commande ($historique_commande) { 
                echo "La commande $historique_commande euros a été reçus.";
                echo "Le total des commandes est de $historique_commande euros.";
            }
        ?>
    </body>
</html>