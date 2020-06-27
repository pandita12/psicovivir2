<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use Illuminate\Support\Facades\Validator;

class StatusController extends Controller
{
	public function store(Request $request){

    $v = Validator::make($request->all(), [
            'name_test' => 'required',
            'user_id'  => 'required',
        ]);
        
        if ($v->fails())
        {
            return response()->json([
                'status' => 'error',
                'errors' => 'Error en la activacion de la prueba',
            ], 422);
        }

        $status = new Status([

        'name_test' => $request->get('name_test'),
        'user_id' => $request->get('user_id'),
      ]);

        $status->save();

        return response()->json('Succes');
    }

    public function index()
    
    {
        $status = Status::join("users", "status.user_id", "=", "users.id")->select('status.id','status.name_test','status.user_id','status.active','users.name')->orderBy('id', 'DESC')->get();

        return response()->json($status);
    }

    public function llamado($id)
    
    {
        $status = Status::join("users", "status.user_id", "=", "users.id")->select('status.id','status.name_test','status.user_id','status.active','users.name')->orderBy('id', 'DESC')->where('status.user_id', '=', $id)->get();

        return response()->json($status);
    }

     public function delete($id){

        $status = Status::find($id);

        $status->delete();
    }

    public function borrar($id,$num){

        if ($num == 1) {

            $nombre = 'Test de Locus';
        }else if ($num == 2) {
            
            $nombre = 'Test de Rosenberg';    
        }else{

            $nombre = 'Test de la Casa';                
        }

        $status = Status::where('user_id','=', $id)->where('name_test', '=', $nombre)->first();

        $status->delete();
    }

}
