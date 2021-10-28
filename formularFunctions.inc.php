<?php
    function auswahlliste($name, $ersterWert, $letzterWert, $schrittweite){
        if (!is_string($name) || !is_int($ersterWert) || !is_int($letzterWert) || !is_int($schrittweite)) {
            return false;
        }
        $stringFormular = "<select name='".$name."'>";
        for ($i=$ersterWert; $i <= $letzterWert ; $i+=$schrittweite) { 
            $stringFormular.="\n<option value='".$i."'>$i</option>"; 
        }
        $stringFormular.="\n</select>";

        return $stringFormular;
    }

    function auswahllisteArray($name, $datenArray, $selected=""){
        if (!is_string($name) || !is_array($datenArray) || !is_string($selected)) {
            return false;
        }

        $stringFormular = "<select name='".$name."'>";
        foreach ($datenArray as $value) {
            if ($value === $selected) {
                $stringFormular .= "\n<option value='".$value."'>selected>'".$value."'</option> </select>";
            }
            else{
                $stringFormular .= "\n<option value='".$value."' >$value</option>";
            }
            
        }
    }
?>
