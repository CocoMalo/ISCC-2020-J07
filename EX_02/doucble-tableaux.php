<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <?php
            
                $tableau1 = array ("T-shirt Rouge" => 15.50, 5);
                $tableau2 = array ("T-shirt Vert" => 15.50, 6);
                $tableau3 = array ("T-shirt Argent" => 15.50, 8);
                $tableau4 = array ("Short Bleu" => 16.50, 5);
                $tableau5 = array ("Short Vert" => 19.99, 5);
                $tableau6 = array ("Veste Argent" => 19.99, 10);
                $tableau7 = array ("Veste Argent" => 35, 3);

        $panier = array_merge ($tableau1,$tableau2,$tableau3,$tableau4,$tableau5,$tableau6,$tableau7);

            function affichier_panier ($panier) {
                echo "<ul> <li>$tableau1</li><li> </li><li> </li>
                <ul> <li>$tableau2</li><li> </li><li> </li>
                <ul> <li>$tableau3</li><li> </li><li> </li>
                <ul> <li>$tableau4</li><li> </li><li> </li>
                <ul> <li>$tableau5</li><li> </li><li> </li>
                <ul> <li>$tableau6</li><li> </li><li> </li>
                <ul> <li>$tableau7</li><li> </li><li> </li>";
             }
            
            function calculer_total_panier ($panier) {
                return 
             }
            
            
        ?>
    </body>
</html>