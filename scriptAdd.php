<?php 

        function getScriptAdd($tableName,$inputTypes,$names)
        {

            $result='$("#formAdd'.$tableName.'").submit(function (e){'."\n".
            '//prevent Default functionality'."\n".
             '   e.preventDefault();'."\n".
          'var formData = new FormData($(this)[0]);'."\n";

          for($i=0;$i<count($inputTypes);$i++)
          {
                if($inputTypes[$i]=="file")
                {
                    $result.='var file_data = $("#'.$names[$i].'").prop("files")[0];'."\n".
                    'formData.append("file",file_data);'."\n";
                }
          }


          
           $result.='$.ajax({'."\n".
            'url:"{{route("'.$tableName.'.add")}}",'."\n".
            'method:"POST",'."\n".
             'dataType    : "json",'."\n".
             'cache       : false,'."\n".
             'contentType : false,'."\n".
             'processData : false,'."\n".
              '    data:formData,'."\n".
             'success : function(response){'."\n".
            '$("#msgAdd'.$tableName.'").html("");'."\n".
              'if(response.status==0)'."\n".
              '$("#msgAdd'.$tableName.'").html(response.msg);'."\n".
              'else'."\n".
              '{ '."\n".
           '      alert(response.msg);'."\n".
           '       location.reload();'."\n".
           '      $("addModal'.$tableName.'").modal("hide");'."\n".
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
           '       $("#msgAdd'.$tableName.'").html(errorString);'."\n".
           '    }'."\n".
           '    });'."\n".
           '});'."\n";
            return $result;

        }






?>