<!DOCTYPE html>
<html>
    <body>
        <?php
            include "formularFunctions.inc.php";
            echo auswahlliste("test",2,6,1); 
            if(false === auswahlliste("test",2,9,"test") ) 
            echo "<br> Falscher Aufruf"; 
        ?>
    </body>
</html>