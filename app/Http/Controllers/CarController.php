<?php

namespace App\Http\Controllers;

class CarController extends Controller
{
    private function getCars($id = null)
    {
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

    public function detail($id)
    {
        $state = array_merge([ 'path' => "/detail/{$id}" ], $this->getCars($id));
        return $this->pack($state);
    }

    public function home()
    {
        $state = array_merge([ 'path' => '/' ], $this->getCars());
        return $this->pack($state);
    }
}
