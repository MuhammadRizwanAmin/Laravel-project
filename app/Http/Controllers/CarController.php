<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Car;
use App\Models\Mechenic;

class CarController extends Controller
{
    public function add_car($id){
        $mechenic = Mechenic::find($id);
        $car = new Car();
        $car->model = 'Honda City';
        $mechenic->car()->save($car);

    }
}
