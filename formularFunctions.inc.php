<?php
    function auswahlliste($name, $ersterWert, $letzterWert, $schrittweite){
        if (!is_string($name) || !is_int($ersterWert) || !is_int($letzterWert) || !is_int($schrittweite)) {
            return false;
        }
        $stringFormular = "<select name=$name>";
        for ($i=$ersterWert; $i <= $letzterWert ; $i+=$schrittweite) { 
            $stringFormular.="\n<option value=$i >$i</option>"; 
        }
        $stringFormular.="\n</select>";

        return $stringFormular;
    }
?>
