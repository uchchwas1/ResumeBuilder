<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
   
    function YourName($firstname, $middlename, $lastname){
        echo 'I am in demo controller<br>';
        
        return view('InfoPage', [ 'firstkey' => $firstname, 'middlekey' => $middlename, 'lastkey' => $lastname ]);
    }


}
