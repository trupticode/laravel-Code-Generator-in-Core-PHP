<?php

function getFetchCode($tableName)
{
    $resultUpdate="function fetch".ucfirst($tableName).'(Request $request){'."\n";
        

        $resultUpdate.='$sel=DB::table("'.$tableName.'")->find($request->id);'."\n";
        $resultUpdate.='echo json_encode($sel);'."\n";
        $resultUpdate.="}"."\n";
       
    
        return $resultUpdate;
}







?>