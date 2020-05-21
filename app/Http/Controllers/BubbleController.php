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

     function index2()
     {
         $data = Bubble::all();
         if($data->first())
         {
         foreach ($data as $value) {
             if($value->color==0){
             $array1[] = ['value'=> strlen($value->name),'name'=>$value->name];
             }
             else{
                $array2[] = ['value'=> strlen($value->name),'name'=>$value->name];

             }

         }

         $data1=json_encode($array1);
         $data2=json_encode($array2);
       return view('bubble3',['data1'=> $data1,'data2'=> $data2]);

    }
    else{
        return redirect('/dashboard');
    }
      }
}
