<?php 

        function getScripDelete($tableName)
        {

            $result='function delete'.$tableName.'($url,$msg){'."\n".
            'if(confirm($msg))'."\n".
            '{'."\n".
            '$.ajax({'."\n".
            '    url:$url,'."\n".
            '    method:"get",'."\n".
            '    dataType:"json",'."\n".
            '    headers: '."\n".
            '    {'."\n".
            '        "X-CSRF-TOKEN":"{{ csrf_token() }}"'."\n".
            '    },'."\n".
            '    success:function(response){'."\n".
                'if(response.status==0)'."\n".
                'alert(response.msg);'."\n".
                'else'."\n".
                '{ '."\n".
             '      alert(response.msg);'."\n".
             '       location.reload();'."\n".
             '  }'."\n";
                $result.="}\n});\n}\n";
                $result.='}'."\n";
                   return $result;
                }
