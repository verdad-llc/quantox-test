<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 10.01.2020
 * Time: 1:44
 */
namespace App\Traits;

trait FormatTrait{

    public function json($data)
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }

    public function xml($data)
    {
        return response()->xml($data);
    }
}