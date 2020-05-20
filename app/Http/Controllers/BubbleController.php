<?php

namespace App\Http\Controllers;

use App\Bubble;
use Illuminate\Http\Request;

class BubbleController extends Controller
{
    function index()
    {
        $data = Bubble::all();
     $array[] = ['name', 'id', '','',''];

        $maxY=0;
        $maxX=0;


        foreach ($data as $key => $value) {
            $array[++$key] = [$value->name,$value->id,strlen($value->name)  ,$value->color,strlen($value->name)];




            if($value->id>$maxX)
            {
                $maxX=$value->id;
            }
            if(strlen($value->name)>$maxY)
            {
                $maxY=strlen($value->name);
            }
        }


        $data=json_encode($array);





      return view('bubble',['name'=> $data,'maxX'=>$maxX,'maxY'=>$maxY]);
     }
}
