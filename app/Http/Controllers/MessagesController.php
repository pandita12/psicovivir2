<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Resources\UserCollection;
use App\Http\Resources\MessageCollection;
use App\Message;
use App\User;


class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    
    {
        
        $message = Message::join("users", "messages.user_id_send", "=", "users.id")->select('messages.id','messages.user_id_send','messages.title','messages.message','messages.user_id_received','messages.status','users.name')->orderBy('id', 'DESC')->get();

        // $messages = Message::orderBy('id', 'DESC')->get();     


        // return response()->json($messages);


        return new MessageCollection($message);
    
    }

    public function enviados(){

        $message2 = Message::join("users", "messages.user_id_received", "=", "users.id")->select('messages.id','messages.user_id_send','messages.title','messages.message','messages.user_id_received','messages.status','users.name')->orderBy('id', 'DESC')->get();

        return new MessageCollection($message2);


    }


    public function numero($id){

        $message = Message::all()->where('status', '=', 0)->where('user_id_received','=', $id)->count();


        return response()->json(['conteo' => $message]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return new UserCollection(User::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $message = new Message([
        'user_id_send' => $request->get('user_id_send'),
        'title' => $request->get('title'),
        'message' => $request->get('message'),
        'user_id_received' => $request->get('user_id_received'),

      ]);

        $message->save();

        return response()->json('Succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $message = Message::find($id);

      $message->update($request->all());

      return response()->json('Correctamente Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
