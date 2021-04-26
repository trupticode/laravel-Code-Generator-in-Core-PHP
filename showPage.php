<?php 

function getShowPage($tableName)
{


    $resultUpdate="function show".ucfirst($tableName).'(){'."\n";
        
           
        $resultUpdate.='return view("'.$tableName.'");'."\n";
        $resultUpdate.="}"."\n";
       
    
        return $resultUpdate;
}





?>