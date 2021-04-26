<?php 

function getInsertCode($tableName,$inputTypes,$inputName,$fileLocation,$validation)
{

    $result="function add".ucfirst($tableName).'(Request $request){'."\n";


        $result.=$validation."\n";
    for($i=0;$i<count($inputTypes);$i++)
    {
        if($inputTypes[$i]=="file")
        {
                $result.='if($request->'.$inputName[$i].')'."\n".'{'."\n";
                $result.='$'.$tableName.'Image = time() . rand(1000, 9999).".".$request->'.$inputName[$i].'->extension();'."\n";
                $result.='$request->image->storeAs("'.$fileLocation.'", $'.$tableName.'Image, "public");'."\n";    
                $result.='$arr["'.$inputName[$i].'"]=$'.$tableName.'Image;'."\n".'}'."\n";
        }
        else 
        $result.='$arr["'.$inputName[$i].'"]=$request->'.$inputName[$i].';'."\n";
    }
    $result.='$ins=DB::table("'.$tableName.'")->insert($arr);'."\n";
    $result.='if($ins)'."\n".
    '{'."\n".
        '$res["status"]=1;'."\n".
        '$res["msg"]="'.$tableName.' Added successfully ";'."\n".
    '}'."\n".
    'else'."\n".
    '{'."\n".
    '$res["status"]=0;'."\n".
    '$res["msg"]="Unable to add '.$tableName.'";'."\n".
    '}';
    $result.= "\n".'echo json_encode($res);';
    $result.="\n}"."\n";
   

    return $result;
}
?>