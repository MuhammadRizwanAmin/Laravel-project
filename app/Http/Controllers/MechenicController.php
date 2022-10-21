<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Car;
use App\Models\Mechenic;

class MechenicController extends Controller
{
    public function add_mechenic(){
        $mechenic = new Mechenic();
        $mechenic->name = 'Haider';
        $mechenic->save();

    }
}
