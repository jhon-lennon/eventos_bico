<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\Comentario;
use Illuminate\Http\Request;

class Comentarios extends Controller
{
    public function inserir(Request $request)
    {
        $coment = new Comentario();

          $coment->comentario = $request->input('comentario');
     $coment->save();







        $comen = Comentario::all()->toArray();
        //  echo 'ok<pre>';

        // print_r($request->input('comentario'));
        //echo'teste';
         $js = json_encode($comen);
     echo $js;

       // var_dump($comen);


        //echo"ndivnedvvvodvnodnvdvvvvvvvvvvvvvvvvvdvndnvdvd";

       // echo $request->input('comentario');
    }
}
