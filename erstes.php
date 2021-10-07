<html>
    <body>
        <h1>Erste PHP-Seite</h1>
        <?php
            for ($i=0; $i < 10; $i++) { 
                echo "<br><b>Hallo Welt ".$i;
                echo "<br><b> Im WLan ITS-TEST lautet das Passwort: Fit4bib2021";
            }
            
            $x = "123PLZ"; //Ist ein String 
            $x+=55;
            echo $x; // es komm 178 raus weil er von x nur 123 nimmt und das dann mit 55 addiert

                
            if ("" == 0) {// mit dem 2fachen gleichhaltszeichen werden werte verglichen
                echo "<br> gleich";
            }
            if ("" === 0) {// mit dem 3fachen gleichhaltszeichen werden die Typen verglichen und die werte
                echo "<br> gleich";
            }

            $z[0]= "Anton";
            $z[1]= "Meier";
            $z[2]= 33106;

            echo "<br>";
            for ($i=0; $i < count($z) ; $i++) { 
                echo $z[$i]."<br>";
            }
            
            $z[4] = "PB";

            foreach($z as $key=>$value){
                echo "<br>".$key.": ".$value." ";
            }

            $z= array();//z array geleert (überschrieben)


            $z["vorname"]= "Anton";
            $z["nachname"]= "Meier";
            $z["plz"]= 33106;
            $z["ort"] = "PB";
            echo "<br>";
            foreach($z as $key=>$value){
                echo "<br>".$key.": ".$value." ";
            }
        ?>
    </body>
</html>