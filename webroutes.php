<?php 

function getWebRoutes($tableName,$controllerName)
{

    $result='use App\Http\Controllers\\'.$controllerName.';'."\n";
    // for show
    $result.="Route::get('/".$tableName."/show/',[".$controllerName."::class,'show".ucfirst($tableName)."'])->name('".$tableName.".show');\n";

    //for insert
    $result.="Route::post('/".$tableName."/add/',[".$controllerName."::class,'add".ucfirst($tableName)."'])->name('".$tableName.".add');\n";
    
    //for fetch
    $result.="Route::post('/".$tableName."/fetch/',[".$controllerName."::class,'fetch".ucfirst($tableName)."'])->name('".$tableName.".fetch');\n";


    //for update
    $result.="Route::post('/".$tableName."/update/',[".$controllerName."::class,'update".ucfirst($tableName)."'])->name('".$tableName.".update');\n";


    //for delete
    $result.="Route::get('/".$tableName."/delete/{id}',[".$controllerName."::class,'delete".ucfirst($tableName)."'])->name('".$tableName.".delete');";

    return $result;

}







?>