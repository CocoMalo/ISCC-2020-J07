<!DOCTYPE html> 
<html>
    <head>
    </head>
    
    <body>
            <h1> Date 1 </h1>
        <?php
                    
                echo "<p> Aujourd'hui, nous sommes le " . date("Y/m/d H : i : s </p>") ;
                echo "L'ISCC a débuté le 22 juin 2020 à 9h00.";

            class date1 {
                function date_1 ($date_ajd) {
                    echo "<p> Aujourd'hui, nous sommes le " . date("Y/m/d H : i : s </p>") ;
                 }
             }
            
            $date_deb_ISCC = new date1;
            $date_deb_ISCC -> date_1();



        ?>
    </body>
</html> 