<?php 

function getTableCode($tableName,$inputTpes,$names,$helperName,$location="")
{
        $result='<button type="button"  data-toggle="modal" data-target="#addModal'.$tableName.'" class="btn btn-primary" >Add '.$tableName.'</button>'."\n";
        $result.='<table>'."\n".
        '<thead>'."\n".
          '<tr>'."\n".
          '<th>Sr No</th>'."\n";

          for($i=0;$i<count($inputTpes);$i++)
          {
              $result.='<th>'.$names[$i].'</th>'."\n";
          }
          $result.="<th>Action</th>"."\n";
          $result.='</tr>'."\n".
          '</thead>'."\n".
            '<tbody>@php $i=0; @endphp'."\n";
           $result.= '@foreach('.$helperName.'::get'.ucfirst($tableName).'() as $item)'."\n".
              '<tr>'."\n".
              '<td>{{++$i}}</td>'."\n";
              for($i=0;$i<count($inputTpes);$i++)
              {
                  if($inputTpes[$i]=="file")
                  {
                    $result.='<td><img src="{{asset("storage/'.$location.'")."/".$item->'.$names[$i].'}}" style="width:100px;height:100px"></td>'."\n";
                  }
                  else
                  $result.='<td>{{$item->'.$names[$i].'}}</td>'."\n";


                  
              }
              $result.='<td>'."\n".
                  '<a href="javascript:void(0)" onclick="fetch'.$tableName.'('."'".'{{$item->id}}'."'".')"><i class="fa fa-pencil-square-o"></i>Edit</a>'."\n".
                  '<a href="javascript:void(0)" onclick="delete'.$tableName.'('."'".'{{route('."'".$tableName.'.delete'."'".',$item->id)}}'."'".','."'".'Are you sure to delete this '.$tableName.''."'".')"><i class="fa fa-trash"></i>Delete</a>'."\n".
                  '</td>'."\n";

             
              $result.='</tr>'."\n @endforeach \n";
              $result.='</tbody>'."\n".
              '</table>'."\n";
           return $result;

}







?>
