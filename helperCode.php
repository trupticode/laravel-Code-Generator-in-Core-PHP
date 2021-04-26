<?php 

function getHelperCode($tableName)
{
    $resultUpdate="public static function get".ucfirst($tableName).'(){'."\n";
        

        $resultUpdate.='$sel=DB::table("'.$tableName.'")->get();'."\n";
        $resultUpdate.='return $sel;'."\n";
        $resultUpdate.="}"."\n";
       
    
        return $resultUpdate;





}







?>