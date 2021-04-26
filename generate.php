
<?php 
include_once('webroutes.php');
include_once('insertCode.php');
include_once('updateCode.php');
include_once('getNamespace.php');
include_once('deleteCode.php');
include_once('fetchCode.php');
include_once('helperCode.php');
include_once('gettable.php');
include_once('getModalAdd.php');
include_once('getModalEdit.php');
include_once('showPage.php');
include_once('scriptAdd.php');
include_once('scriptFetch.php');
include_once('scriptUpdate.php');
include_once('scriptDelete.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Code</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<style>
table tr td {
    border: 1px solid black;
    padding: 5px;
    width: 100%;
}

.bold{
    font-weight: 600;
}
</style>
<div class="container">
<div class="col-lg-12">
<h3 style="text-align: center;">Here is Your Generated Code </h3>
</div>
<div class="col-lg-12">
<h3>Important Links</h3>
</div>
<div class="col-lg-12">
<table style="margin: 10px;">
<thead>
<tr>
<td class="bold">Bootstrap CDN CSS</td>
<td >https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css</td>
</tr>
<tr>
<td class="bold">Bootstrap CDN JS</td>
<td >https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js</td>
</tr>
<tr>
<td class="bold">JQUERY CDN</td>
<td >https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js</td>
</tr>
<tr>
<td class="bold">Font Awsome CDN</td>
<td >https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css</td>
</tr>
</thead>
</table>
</div>
<div class="col-lg-12" style="border: 1px solid black;">
<h3>Graphical Form</h3>
<?php include_once "getForm.php" ?>
</div>
<div class="col-lg-12" style="border: 1px solid black;margin-top:10px">
<h3>Web Routes</h3>
<textarea style="width: 100%;" rows="10"><?= getWebRoutes($tableName,$controllerName); ?></textarea>
</div>
<div class="col-lg-12" style="border: 1px solid black;margin-top:10px">
<h3>Modals</h3>
<textarea style="width: 100%;" rows="10"><?= getModalAdd($formResult,$tableName)."\n".getModalEdit($formResultForEditModal,$tableName,$name,$inputType) ?></textarea>
</div>
<div class="col-lg-12" style="border: 1px solid black;margin-top:10px">
<h3>HTML Code</h3>
<textarea style="width: 100%;" rows="10"><?= getTableCode($tableName,$inputType,$name,$helper,$location) ?></textarea>
</div>




<div class="col-lg-12" style="border: 1px solid black;margin-top:10px">
<h3>Helper Code to get All Records</h3>
<textarea style="width: 100%;" rows="10"><?= getHelperCode($tableName); ?></textarea>
</div>
<div class="col-lg-12" style="border: 1px solid black;margin-top:10px">
<h3>Scripts</h3>
<textarea style="width: 100%;" rows="10"><?="<script>". getScriptAdd($tableName,$inputType,$name)."\n".getScriptFetch($tableName,$inputType,$name)."\n".getScriptUpdate($tableName,$inputType,$name)."\n".getScripDelete($tableName)."</script>"; ?></textarea>
</div>
<div class="col-lg-12" style="border: 1px solid black;margin-top:10px">
<h3>Controller Code </h3>
<textarea style="width: 100%;" rows="10"><?= getNamepsace()."\n".getShowPage($tableName)."\n".getInsertCode($tableName,$inputType,$name,$location,$validation)."\n".getFetchCode($tableName)."\n".getUpdateCode($tableName,$inputType,$name,$location,$validationUpdate)."\n".getDeleteCode($tableName); ?></textarea>
</div>

<div class="col-lg-12" style="border: 1px solid black;margin-top:10px">
<h3>Controller Code for Fetch Record by Id</h3>
<textarea style="width: 100%;" rows="10"><?= getFetchCode($tableName); ?></textarea>
</div>
<div class="col-lg-12" style="border: 1px solid black;margin-top:10px">
<h3>Controller Code for Insert</h3>
<textarea style="width: 100%;" rows="10"><?= getInsertCode($tableName,$inputType,$name,$location,$validation); ?></textarea>
</div>
<div class="col-lg-12" style="border: 1px solid black;margin-top:10px">
<h3>Controller Code for Update</h3>
<textarea style="width: 100%;" rows="10"><?= getUpdateCode($tableName,$inputType,$name,$location,$validation); ?></textarea>
</div>


<div class="col-lg-12" style="border: 1px solid black;margin-top:10px">
<h3>Controller Code for Delete</h3>
<textarea style="width: 100%;" rows="10"><?= getDeleteCode($tableName); ?></textarea>
</div>
<div class="col-lg-12" style="border: 1px solid black;margin-top:10px">
<h3>Namespace Used</h3>
<textarea style="width: 100%;" rows="10"><?= getNamepsace(); ?></textarea>
</div>



<div class="col-lg-12" style="border: 1px solid black;margin-top:10px">
<h3>Validation Code</h3>
<textarea style="width: 100%;" rows="10"><?php echo $validation ; ?></textarea>
</div>



</div>
</body>
</html>

