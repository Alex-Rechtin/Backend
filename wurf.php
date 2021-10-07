<html>
    <body>
        <?php
            $anzahl["EinsUndZwei"] = 0;
            $anzahl["DreiUndVier"] = 0;
            $anzahl["FünfundSechs"] = 0;
            for ($i=0; $i < 6000 ; $i++) { 
                $zahlen[$i] = rand(1,6);
            }
            for ($i=0; $i < count($zahlen) ; $i++) { 
                if ($zahlen[$i] === 1 || $zahlen[$i] === 2) {
                    $anzahl["EinsUndZwei"]++ ;
                }
            }
            foreach($zahlen as $value){
                if ($value === 3 || $value === 4) {
                    $anzahl["DreiUndVier"]++;
                }
            }
            foreach ($zahlen as $key => $value) {
                if ($value === 5 || $value === 6) {
                    $anzahl["FünfundSechs"]++ ;
                }
            }
            foreach($anzahl as $key => $value){
                echo "<br>".$key.": ".$value." ";
            }
            
            
        ?>
    </body>
</html>