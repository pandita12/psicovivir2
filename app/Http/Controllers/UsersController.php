<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Resources\UserCollection;
use App\User;


class UsersController extends Controller
{
    public function store(Request $request)
    {
      $user = new User([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'age' => $request->get('age'),
        'password' => bcrypt($request->get('password')),
        'phone_number' => $request->get('phone_number'),
        'home' => $request->get('home'),
        'place_of_birth' => $request->get('place_of_birth'),
        'type' => $request->get('type')
      ]);

      $user->save();

      return response()->json('success');
    }

    public function index(Request $request)
    {

      return new UserCollection(User::all());

    }

     public function edit($id)
    {
      $user = User::find($id);
      return response()->json($user);
    }

    public function update($id, Request $request)
    {
      $user = User::find($id);

      $user->update($request->all());

      return response()->json('Correctamente Actualizado');
    }

     public function delete($id)
    {
      $user = User::find($id);

      $user->delete();

      return response()->json('Borrado correctamente');
    }
}
