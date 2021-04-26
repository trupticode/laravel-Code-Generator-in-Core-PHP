
<?php 

$inputType=$_POST["type"];
$required=$_POST["required"];
$placeholder=$_POST["placeholder"];
$name=$_POST["name"];
$id=$_POST["id"];
$maxlength=$_POST["maxlength"];
$minlength=$_POST["minlength"];
$accept=$_POST["accept"];
$default=$_POST["default"];
$label=$_POST["label"];

$tableName=$_POST["tableName"];
$controllerName=$_POST["controllerName"];
$location=$_POST["location"];
$helper=$_POST["helper"];

$formResult="";
$input="";
$formResult.='<div class="container"><newline><div class="row"><newline>';

$arrayValidation=array();
$validation='$this->validate($request,['."\n";

for($i=0;$i<count($inputType);$i++)
{
    $input="";
    
    $input.='<div class="col-lg-4"><newline><div class="form-group"><newline>';
    $aster=$required[$i]=="mandatory"?"*":"";
    $input.='<label for="'.$name[$i].'">'.$label[$i].$aster.'</label><newline>';
    if($inputType[$i]!="textarea")
    {
        if($inputType[$i]=="file")
        {
            $input.='<imagethere>'."\n";
        }
        $input.='<input class="form-control" type="'.$inputType[$i].'"';
    }
    else
    {
        $input.='<textarea class="form-control"';
    }
    
        

        //if required
        if(isset($required) && $required[$i]=="mandatory")
        {
            $input.=" required";
            $obj["name"]=$name[$i];
            $obj["values"]='required|'.$accept[$i]."'";
            array_push($arrayValidation,$obj);

            $validation.="'".$name[$i]."'".'=>'."'".'required|'.$accept[$i]."'";
            if(isset($required[$i+1]) && $required[$i+1]=="mandatory")
            {

                    $validation.=","."\n";
            }
            



        }


        if(isset($default) && $input!='textarea')
        {
                $input.=' value="'.$default[$i].'"';
        }


        //set name
        $input.=' name="'.$name[$i].'"';

        //set id

        $input.=' id="'.$id[$i].'"';


        //set max length

        if(isset($maxlength))
        {
            $input.=' maxlength="'.$maxlength[$i].'"';
        }

         //set min length

         if(isset($minlength))
         {
             $input.=' minlength="'.$minlength[$i].'"';
         }

        if(isset($placeholder[$i]))
        {
            $input.=' placeholder="'.$placeholder[$i].'"';
        }


         //set placeholder  and end the input 
         if($inputType[$i]=="textarea")
         {
            $input.='rows="3">'.$default[$i].'</textarea>';
         }
         else
         {
            $input.='>';
         }


         
$input.='<newline></div><newline></div><newline>';
 $formResult.=$input;

        
}
$validation.="\n".']);';
$formResult.='</div><newline></div>';
//echo htmlspecialchars($result);imagethere
echo str_replace("<newline>","\n",$formResult);
$formResultForEditModal=str_replace("<newline>","\n",$formResult);
$formResult=htmlspecialchars(str_replace("<imagethere>","",$formResultForEditModal));

$validationUpdate=$validation;
foreach($name as $item)
    {
        $validationUpdate=str_replace(($item),$item.'Edit',$validationUpdate);
        
    }





?>