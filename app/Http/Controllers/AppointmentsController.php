<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fecha = date("Y-m-d");

        $appointment = Appointment::join("users", "appointments.user_id", "=", "users.id")->select('appointments.id','appointments.date','appointments.time','appointments.user_id','appointments.status','users.name')->orderBy('id', 'ASC')->where('status', '=', 1)->get();

        return response()->json($appointment);
    }


    public function index1()
    
    {
        $fecha = date("Y-m-d");

        $appointment = Appointment::join("users", "appointments.user_id", "=", "users.id")->select('appointments.id','appointments.date','appointments.time','appointments.user_id','appointments.status','users.name')->orderBy('id', 'DESC')->where('status', '=', 1)->where('date', '=',$fecha)->get();

        return response()->json($appointment);
    }


    public function user($id){

        $appointment = Appointment::join("users", "appointments.user_id", "=", "users.id")->select('appointments.id','appointments.date','appointments.time','appointments.user_id','appointments.status','users.name')->orderBy('id', 'DESC')->where('status', '=', 1)->where('user_id', '=' ,$id)->get();

        return response()->json($appointment);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $v = Validator::make($request->all(), [
                    'date' => 'required',
                    'time' => 'required',
                    'user_id'  => 'required|unique:appointments',
                ]);
                
                if ($v->fails())
                {
                    return response()->json([
                        'status' => 'error',
                        'errors' => 'Este usuario tiene una cita activa',
                    ], 422);
                }

                $appointment = new Appointment([
                'date' => $request->get('date'),
                'time' => $request->get('time'),
                'user_id' => $request->get('user_id'),

              ]);

                $appointment->save();

                return response()->json('Succes');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }

    public function delete($id){

        $appointment = Appointment::find($id);

        $appointment->delete();

    }
}
