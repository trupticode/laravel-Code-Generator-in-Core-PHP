<?php 

function getNamepsace()
{
        $result='namespace App\Http\Controllers;'."\n".
        'use Exception;'."\n".
        'use Illuminate\Http\Request;'."\n".
        'use Illuminate\Support\Facades\Auth;'."\n".
        'use Illuminate\Support\Facades\Crypt;'."\n".
        'use Illuminate\Support\Facades\DB;'."\n".
        'use Illuminate\Support\Facades\Session;'."\n".
        'use Carbon\Carbon;'."\n";
        return $result;
}

?>