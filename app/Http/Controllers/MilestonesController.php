<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Milestone;

class MilestonesController extends Controller
{
    //
    public function test(){
        $genericObject = new class{};
        $genericObject->first_name = 'kris';
        $genericObject->last_name = 'alcordo';
        return json_encode($genericObject);
    }  

    public function withID($id){
        $genericObject = new class{};
        $genericObject->id = $id;
        return json_encode($genericObject);
    }

    public function phpinfo(){
        return phpInfo();
    }

    public function count(){
        $test = new class{};
        $test->test = Milestone::count();
        return json_encode($test);
    }
}
