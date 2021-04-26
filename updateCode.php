<?php 

function getUpdateCode($tableName,$inputTypes,$inputName,$fileLocation,$validation)
{
    $resultUpdate="function update".ucfirst($tableName).'(Request $request){'."\n";
        $resultUpdate.=$validation."\n";
        for($i=0;$i<count($inputTypes);$i++)
        {
            if($inputTypes[$i]=="file")
            {
                    $resultUpdate.='if($request->'.$inputName[$i].'Edit)'."\n".'{'."\n";
                    $resultUpdate.='$'.$tableName.'Image = time() . rand(1000, 9999).".".$request->'.$inputName[$i].'Edit->extension();'."\n";
                    $resultUpdate.='$request->'.$inputName[$i].'Edit->storeAs("'.$fileLocation.'", $'.$tableName.'Image, "public");'."\n";    
                    $resultUpdate.='$arr["'.$inputName[$i].'"]=$'.$tableName.'Image;'."\n".'}'."\n";
            }
            else 
            $resultUpdate.='$arr["'.$inputName[$i].'"]=$request->'.$inputName[$i].'Edit;'."\n";
        }

        $resultUpdate.='$upd=DB::table("'.$tableName.'")->where("id",$request->id'.$tableName.')->update($arr);'."\n";
        $resultUpdate.='if($upd)'."\n".
        '{'."\n".
            '$res["status"]=1;'."\n".
            '$res["msg"]="'.$tableName.' updated successfully ";'."\n".
        '}'."\n".
        'else'."\n".
        '{'."\n".
        '$res["status"]=0;'."\n".
        '$res["msg"]="Unable to update '.$tableName.'";'."\n".
        '}';

        $resultUpdate.= "\n".'echo json_encode($res);';
    $resultUpdate.="\n}"."\n";
        return $resultUpdate;
}







?>