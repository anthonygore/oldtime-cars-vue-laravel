<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    private function get_cars($id = null) {
        $cars = [
            [ 'id' => 1, 'name' => 'Buick', 'url' => asset('images/buick.png'), 'price' => '$15,000' ],
            [ 'id' => 2, 'name' => 'Chevy', 'url' => asset('images/chevy.png'), 'price' => '$18,000' ],
        ];
        if (is_null($id)) {
            return compact('cars');
        }
        $key = $id - 1;
        return array_key_exists($key, $cars) ? $cars[$key] : null;
    }

    public function detail_web($id)
    {
        $state = array_merge([ 'path' => '/detail/' . $id], $this->get_cars($id));
        return view('app', ['state' => $state]);
    }

    public function detail_api($id)
    {
        $state = array_merge([ 'path' => '/detail/' . $id], $this->get_cars($id));
        return response()->json($state);
    }

    public function home_web()
    {
        $state = array_merge([ 'path' => '/' ], $this->get_cars());
        return view('app', ['state' => $state]);
    }

    public function home_api()
    {
        $state = array_merge([ 'path' => '/' ], $this->get_cars());
        return response()->json($state);
    }
}
