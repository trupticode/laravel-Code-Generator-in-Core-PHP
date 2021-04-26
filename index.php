<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhupender Code Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <h4 style="text-align:center">Welcome to Bhupender's Code generator.</h4>
    <div class="container">
    <form id="formSubmit" method="POST" action="generate.php">
   
    <br>
    <br>
    <br>
    <div class="row" style="border:1px solid black;margin:10px">
    <div class="col-lg-12">
    <h3>Enter the general Details</h3>
    </div>
    <div class="col-lg-2">
        <div class="form-group">
            <label for="tablename">TableName</label>        
            <input class="form-control" type="text" required id="tableName" name="tableName" placeholder="Enter table name">
        </div>
    </div>
    <div class="col-lg-2">
        <div class="form-group">
            <label for="tablename">Controller Name</label>        
            <input type="text" class="form-control" required id="controllerName" name="controllerName" placeholder="Enter controller name">
        </div>
    </div>
   
    <div class="col-lg-2">
        <div class="form-group">
            <label for="helper">Helper Class Name</label>        
            <input type="text" class="form-control" required id="helper" name="helper" placeholder="Enter helper name">
        </div>
    </div>
   
    <div class="col-lg-6">
        <div class="form-group">
            <label for="location">Storage Folder for Files</label>        
            <input type="text" class="form-control" required id="location" name="location" placeholder="Enter location name">
        </div>
    </div>
   
    </div>
    <div class="row rowCollection">
    <div class="singlerow">
    <div class="row " style="border: 1px solid black;">
    <div class="col-lg-12">
            <h6 style="text-align: center;">Enter the Form Columns to generate Code for.</h6>           
        </div>
       
        <br>
        <br>
        <br>
        <div class="col-lg-2">
            <div class="form-group">
            <label for="type">Input Type*</label> 
            <select required class="form-control" name="type[]" id="type[]">
            <option value="">Select input type</option>
            <option value="text">Text</option>
            <option value="number">Number</option>
            <option value="email">Email</option>
            <option value="textarea">Textarea</option>
            <option value="checkbox">Checkbox</option>
            <option value="file">File</option>
            <option value="date">Date</option>
            </select>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
            <label for="type">Required ?</label> 
            <select required class="form-control" name="required[]" id="required[]">
            <option value="">Select Required or not</option>
            <option value="optional" selected>Optional</option>
            <option value="mandatory">Mandatory</option>
            </select>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
            <label for="placeholder[]">Placeholder</label>
            <input class="form-control" placeholder="Enter place holder" type="text" name="placeholder[]" id="placeholder[]">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
            <label for="label[]">Label*</label>
            <input required class="form-control" placeholder="Enter label name" type="text" name="label[]" id="label[]">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
            <label for="name[]">Input Name*</label>
            <input required  class="form-control" placeholder="Enter input name" type="text" name="name[]" id="name[]">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
            <label for="id[]">Input Id*</label>
            <input required class="form-control" placeholder="Enter input id" type="text" name="id[]" id="id[]">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
            <label for="maxlength[]">Max Length</label>
            <input class="form-control" placeholder="Enter max length" type="text" name="maxlength[]" id="maxlength[]">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
            <label for="minlength[]">Min Length</label>
            <input  class="form-control" placeholder="Enter min length" type="text" name="minlength[]" id="minlength[]">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
            <label for="accept[]">Accepted Value* </label> 
            <select required class="form-control" name="accept[]" id="accept[]">
            <option value="">Select accepted value</option>
            <option value="string">String</option>
            <option value="numeric">Number</option>
            <option value="file">File</option>
            </select>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
            <label for="default[]">Default Value</label>
            <input class="form-control" placeholder="Enter default value" type="text" name="default[]" id="default[]">
            </div>
        </div>
       
    </div>
    </div>
    <hr>
    
     <button type="button" class="btn btn-success mt-3" onclick="generateRow()" >Add new Row</button>
    </div>
    <div class="col-lg-12 text-center">
        <button type="button" onclick="submitForm()"  class="btn btn-primary">Generate</button>
        </div>
    </form>
    </div>
<script>
function generateRow()
{
    $data=$(".singlerow").html();
    $(".rowCollection").append($data);
}
function submitForm()
{
    if(confirm("Are you to submit the details ?"))
    {
            $("#formSubmit").submit();
    }
    
}
</script>
</body>
</html>