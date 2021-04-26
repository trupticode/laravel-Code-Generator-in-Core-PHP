<?php 

        function getScriptUpdate($tableName,$inputTypes,$names)
        {

            $result='$("#formEdit'.$tableName.'").submit(function (e){'."\n".
            '//prevent Default functionality'."\n".
             '   e.preventDefault();'."\n".
          'var formData = new FormData($(this)[0]);'."\n";

          for($i=0;$i<count($inputTypes);$i++)
          {
                if($inputTypes[$i]=="file")
                {
                    $result.='var file_data = $("#'.$names[$i].'Edit").prop("files")[0];'."\n".
                    'formData.append("file",file_data);'."\n";
                }
          }

           $result.='$.ajax({'."\n".
            'url:"{{route("'.$tableName.'.update")}}",'."\n".
            'method:"POST",'."\n".
             'dataType    : "json",'."\n".
             'cache       : false,'."\n".
             'contentType : false,'."\n".
             'processData : false,'."\n".
              '    data:formData,'."\n".
             'success : function(response){'."\n".
            '$("#msgEdit'.$tableName.'").html("");'."\n".
              'if(response.status==0)'."\n".
              '$("#msgEdit'.$tableName.'").html(response.msg);'."\n".
              'else'."\n".
              '{ '."\n".
           '      alert(response.msg);'."\n".
           '       location.reload();'."\n".
           '      $("editModal'.$tableName.'").modal("hide");'."\n".
           '  }'."\n".
           '},'."\n".
           '    headers: '."\n".
           '    {'."\n".
           '        "X-CSRF-TOKEN":"{{ csrf_token() }}"'."\n".
           '    },'."\n".
           'error:function(error){'."\n".
           '         console.log(error)'."\n".
           '              var response = JSON.parse(error.responseText);'."\n".
           '       var errorString = "<ul>";'."\n".
           '       $.each(response.errors, function( key, value) {'."\n".
           '           $("#"+key).addClass("is-invalid");'."\n".
           '           errorString += "<li>" + value + "</li>";'."\n".
           '       });'."\n".
           '       errorString += "</ul>";'."\n".
           '       $("#msgEdit'.$tableName.'").html(errorString);'."\n".
           '    }'."\n".
           '    });'."\n".
           '});'."\n";
            return $result;

        }






?>