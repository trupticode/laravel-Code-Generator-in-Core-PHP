<?php 

function getDeleteCode($tableName)
{

    $resultUpdate="function delete".ucfirst($tableName).'($id){'."\n";
        

        $resultUpdate.='$del=DB::table("'.$tableName.'")->where("id",$id)->delete();'."\n";
        $resultUpdate.='if($del)'."\n".
        '{'."\n".
            '$res["status"]=1;'."\n".
            '$res["msg"]="'.$tableName.' deleted successfully ";'."\n".
        '}'."\n".
        'else'."\n".
        '{'."\n".
        '$res["status"]=0;'."\n".
        '$res["msg"]="Unable to delete '.$tableName.'";'."\n".
        '}';

        $resultUpdate.= "\n".'echo json_encode($res);';
    $resultUpdate.="\n}"."\n";
    
        return $resultUpdate;

}






?>