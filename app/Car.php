<?php

namespace App;

class Car
{
    public static function all()
    {
        return [
            [ 'id' => 1, 'name' => 'Buick', 'url' => asset('images/buick.png'), 'price' => '$15,000' ],
            [ 'id' => 2, 'name' => 'Chevy', 'url' => asset('images/chevy.png'), 'price' => '$18,000' ],
        ];
    }

    public static function find($id)
    {
        $cars = self::all();
        $key = $id - 1;
        return array_key_exists($key, $cars) ? $cars[$key] : null;
    }
}
