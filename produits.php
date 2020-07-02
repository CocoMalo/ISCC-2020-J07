<!DocTYPE html>
<html>
    <head>
    </head>

    <body>
        <?php
            $produit = array (
                "T-shirt Rouge"=> 15.50,
                "T-shirt Vert"=> 15.50,
                "T-shirt Argent"=> 16.50,
                "Short Bleu"=> 19.99,
                "Sort Vert"=> 19.99,
                "Veste Argent"=> 35 );
            foreach ($produit as $element) { 
                echo $element. "<br/>";
            }

            function afficher_produit () { }
        ?>
    </body>
</html> 