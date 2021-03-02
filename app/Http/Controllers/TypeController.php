<?php

namespace App\Http\Controllers;
use App\Actions\Type\GetTypeAction;

class TypeController extends Controller
{
    private $getTypes;

    public function __construct(GetTypeAction $getTypes)
    {
        $this->getTypes = $getTypes;
    }
    public function index(){
        $data['types'] =  $this->getTypes->execute();
        return response()->json($data);
    }
}
