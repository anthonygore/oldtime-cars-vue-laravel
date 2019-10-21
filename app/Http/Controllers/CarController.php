<?php

namespace App\Http\Controllers;

use App\Car;

class CarController extends Controller
{
    public function detail($id)
    {
        $state = array_merge([ 'path' => "/detail/{$id}" ], Car::find($id));
        return $this->pack($state);
    }

    public function home()
    {
        $state = array_merge([ 'path' => '/' ], ['cars' => Car::all()]);
        return $this->pack($state);
    }
}
