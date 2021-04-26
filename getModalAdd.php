<?php 

function getModalAdd($formResult,$tableName)
{
        $result='<!-- Modal For Adding '.$tableName.'-->'."\n".
       ' <div class="modal fade" id="addModal'.$tableName.'" tabindex="-1" role="dialog" aria-labelledby="modalLabel'.$tableName.'" aria-hidden="true">'."\n".
       '   <div class="modal-dialog" role="document">'."\n".
       '     <form enctype="multipart/form-data" id="formAdd'.$tableName.'">'."\n".
       '      <div class="modal-content">'."\n".
       '       <div class="modal-header">'."\n".
       '         <h5 class="modal-title" >Add '.$tableName.'</h5>'."\n".
       '         <button type="button" class="close" data-dismiss="modal" aria-label="Close">'."\n".
       '           <span aria-hidden="true">&times;</span>'."\n".
       '         </button>'."\n".
       '       </div>'."\n".
       '       <div class="modal-body">'."\n".
       '        <div class="col-lg-12">'."\n".
                '<p style="color:#FA0000" id="msgAdd'.$tableName.'"></p>'."\n".
                '</div>'."\n".
               $formResult.
       '       </div>'."\n".
       '       <div class="modal-footer">'."\n".
       '         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'."\n".
       '         <button type="submit" class="btn btn-primary">Add '.$tableName.'</button>'."\n".
       '       </div>'."\n".
       '     </div>'."\n".
       '     </form>'."\n".
       '   </div>'."\n".
       ' </div>';

       return $result;
}






?>