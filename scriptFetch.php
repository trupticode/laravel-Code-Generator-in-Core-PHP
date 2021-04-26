<?php 

        function getScriptFetch($tableName,$inputTypes,$names)
        {

            $result='function fetch'.$tableName.'($id){'."\n".
            '$.ajax({'."\n".
            '    url:"{{route("'.$tableName.'.fetch")}}",'."\n".
            '    method:"POST",'."\n".
            '    dataType:"json",'."\n".
            '    data:{'."\n".
            '        id:$id,'."\n".
            '    },'."\n".
            '    headers: '."\n".
            '    {'."\n".
            '        "X-CSRF-TOKEN":"{{ csrf_token() }}"'."\n".
            '    },'."\n".
            '    success:function(response){'."\n";

                for($i=0;$i<count($inputTypes);$i++)
                {
                    if($inputTypes[$i]=="file")
                   { $result.='$("#temp'.$names[$i].'Edit").attr("src",'."'".'{{asset("storage/'.$tableName.'")}}'."'"."+'"."/"."'+".'response.'.$names[$i].');'."\n";
                   $result.='$("#'.$names[$i].'Edit").removeAttr("required");'."\n";
                }
                    else
                    $result.='$("#'.$names[$i].'Edit").val(response.'.$names[$i].');'."\n";
                }
                $result.='$("#id'.$tableName.'").val(response.id);'."\n";
                $result.=' $("#editModal'.$tableName.'").modal("show");'."\n";  
                $result.="}\n});\n}\n";
                   return $result;
                }
