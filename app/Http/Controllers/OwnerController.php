<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Car;
use App\Models\Mechenic;

class OwnerController extends Controller
{
    public function add_owner($id){
        $car = Car::find($id);
        $owner = new Owner();
        $owner->name = 'Rizwan Amin';
        $car->owner()->save($owner);

    }

    public function show_owner($id){
        // $owner = Mechenic::find($id)->car->owner;
           $owner = Mechenic::find($id)->owner;
        return $owner;
    }
}
