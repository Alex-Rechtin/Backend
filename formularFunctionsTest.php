<!DOCTYPE html>
<html>
    <body>
        <?php
            include "formularFunctions.inc.php";
            echo auswahlliste("test",2,6,1); 
            if(false === auswahlliste("test",2,9,"test") ) 
            echo "<br> Falscher Aufruf"; 

            $datenArray=array("Erna Meier","Otto Meier","Oskar Schmidt"); 
            echo auswahllisteArray("test",$datenArray, "Oskar Schmidt"); 
        ?>
    </body>
</html>