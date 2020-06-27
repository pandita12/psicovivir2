<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Test;
use App\Document;

class TestsController extends Controller
{

    public function TestCasa ($id, Request $request){

     $test = new Test([

          'name' => 'Test de la Casa',
          'result1' => $request->get('respuesta1'),
          'result2' => $request->get('respuesta2'),
          'result_total' => 'Por revisar',
          'indication' => 'Por revisar',
          'user_id' => $id,

        ]);

        $test->save();

        return response()->json('Succes');

    }

     public function store(Request $request)
    
    {

        $test = new Test([

        'name' => $request->get('name'),
        'result1' => $request->get('respuesta1'),
        'result2' => $request->get('respuesta2'),
        'result3' => $request->get('respuesta3'),
        'result4' => $request->get('respuesta4'),
        'result5' => $request->get('respuesta5'),
        'result6' => $request->get('respuesta6'),
        'result7' => $request->get('respuesta7'),
        'result8' => $request->get('respuesta8'),
        'result9' => $request->get('respuesta9'),
        'result10' => $request->get('respuesta10'),
        'result11' => $request->get('respuesta11'),
        'result12' => $request->get('respuesta12'),
        'result13' => $request->get('respuesta13'),
        'result14' => $request->get('respuesta14'),
        'result15' => $request->get('respuesta15'),
        'result16' => $request->get('respuesta16'),
        'result17' => $request->get('respuesta17'),
        'result18' => $request->get('respuesta18'),
        'result19' => $request->get('respuesta19'),
        'result20' => $request->get('respuesta20'),
        'result21' => $request->get('respuesta21'),
        'result22' => $request->get('respuesta22'),
        'result23' => $request->get('respuesta23'),
        'result24' => $request->get('respuesta24'),
        'result25' => $request->get('respuesta25'),
        'result26' => $request->get('respuesta26'),
        'result27' => $request->get('respuesta27'),
        'result28' => $request->get('respuesta28'),
        'result29' => $request->get('respuesta29'),
        'result_total' => $request->get('result_total'),
        'indication' => $request->get('indication'),
        'user_id' => $request->get('user_id')

      ]);

        $test->save();

        return response()->json('Succes');
    }

    public function index($id){

        if ($id == 1) {
            
            $nombre = 'Test de Locus';

        }else if ($id == 2) {
            
            $nombre = 'Test de Rosenberg';
        
        }else{

            $nombre = 'Test de la Casa';
        }



         $tests = Test::join("users", "tests.user_id", "=", "users.id")->select('tests.id','tests.result_total','tests.created_at','tests.indication','users.name')->where('tests.name', '=', $nombre)->get();        

            return response()->json($tests);
    }

      public function delete($id)
    {
      $test = Test::find($id);

      $test->delete();

      return response()->json('Borrado correctamente');
    }

    public function buscar($id){

      $test = Test::find($id);

      return response()->json($test);

    }

    public function casa(){

         $tests = Test::join("users", "tests.user_id", "=", "users.id")->join("documents", "tests.user_id", "=", "documents.user_id")->select('tests.id','tests.result_total','tests.created_at','users.name','tests.indication','tests.user_id')->orderBy('id', 'ASC')->where('tests.name', '=', 'Test de la Casa')->where('documents.type', '=', 'Test de la Casa')->get();        

            return response()->json($tests);
    }


     public function traerDibujo($id){

         $tests = Test::join("documents", "tests.user_id", "=", "documents.user_id")->select('documents.name','documents.id')->where('documents.type', '=', 'Test de la Casa')->where('documents.user_id', '=', $id)->get();        

            return response()->json($tests);
    }

    public function update($id, Request $request)
    
    {
      $test = Test::find($id);

      $test->update($request->all());

      return response()->json('Correctamente Actualizado');
    }
}
