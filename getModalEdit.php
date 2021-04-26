<?php 

function getModalEdit($formResult,$tableName,$names,$inputType)
{

    foreach($names as $item)
    {
        $formResult=str_replace(('name="'.$item.'"'),'name="'.$item.'Edit"',$formResult);
        $formResult= str_replace(('id="'.$item.'"'),'id="'.$item.'Edit"',$formResult);
    }
    
        $image="";

        for($i=0;$i<count($inputType);$i++)
        {
            if($inputType[$i]=="file")
            {
                $image.='<img id="temp'.$names[$i].'Edit" style="width:100px;height:100px"/>'."\n";
            }
        }
        $formResult=str_replace("<imagethere>",$image,$formResult);

        $result='<!-- Modal for editing '.$tableName.' -->'."\n".
       ' <div class="modal fade" id="editModal'.$tableName.'" tabindex="-1" role="dialog" aria-labelledby="modalLabel'.$tableName.'" aria-hidden="true">'."\n".
       '   <div class="modal-dialog" role="document">'."\n".
       '     <form enctype="multipart/form-data" id="formEdit'.$tableName.'">'."\n".
       '     <div class="modal-content">'."\n".
       '       <div class="modal-header">'."\n".
       '         <h5 class="modal-title" >Edit '.$tableName.'</h5>'."\n".
       '         <button type="button" class="close" data-dismiss="modal" aria-label="Close">'."\n".
       '           <span aria-hidden="true">&times;</span>'."\n".
       '         </button>'."\n".
       '       </div>'."\n".
       '       <div class="modal-body">'."\n".
       '        <div class="col-lg-12">'."\n".
                '<p style="color:#FA0000" id="msgEdit'.$tableName.'"></p>'."\n".
                '</div>'."\n".
       '         <input type="hidden" id="id'.$tableName.'" name="id'.$tableName.'">'."\n".         
               $formResult.
       '       </div>'."\n".
       '       <div class="modal-footer">'."\n".
       '         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'."\n".
       '         <button type="submit" class="btn btn-primary">Save changes</button>'."\n".
       '       </div>'."\n".
       '     </div>'."\n".
       '     </form>'."\n".
       '   </div>'."\n".
       ' </div>';

       return $result;
}






?>