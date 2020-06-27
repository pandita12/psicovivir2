<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;
use Illuminate\Support\Facades\Validator;


class HistoriesController extends Controller
{
 
  public function store(Request $request){

        $v = Validator::make($request->all(), [
                'user_id' => 'required',
                'clinical_summary' => 'required',
                'advances'  => 'required',
                'applied_techniques' => 'required',
            ]);
            
            if ($v->fails())
            {
                return response()->json([
                    'status' => 'error',
                    'errors' => 'Hubo un error en el registro de la historia',
                ], 422);
            }

            $history = new History([
            'user_id' => $request->get('user_id'),
            'clinical_summary' => $request->get('clinical_summary'),
            'advances' => $request->get('advances'),
            'applied_techniques' => $request->get('applied_techniques')

          ]);

            $history->save();

            return response()->json('Succes');

    }


     public function busqueda($id)

        {
            // $fecha = date("Y-m-d");

            $history = History::join("users", "histories.user_id", "=", "users.id")->select('histories.id','histories.user_id','histories.created_at','users.name')->orderBy('id', 'ASC')->where('user_id', '=', $id)->get();

            return response()->json($history);
        }


    public function historia ($id){


            $history = History::join("users", "histories.user_id", "=", "users.id")->select('histories.id','histories.user_id','histories.created_at','histories.advances','histories.clinical_summary', 'histories.applied_techniques','users.name')->orderBy('id', 'ASC')->where('histories.id', '=', $id)->get();        

            return response()->json($history);
    }

}
