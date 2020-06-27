<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\DocumentCollection;
use App\Document;
use App\User;
use App\Test;
use Intervention\Image\Facades\Image;

class DocumentsController extends Controller

{
    public function store(Request $request)
    {
      $document = new Document([
        'name' => $request->get('name'),
        'type' => $request->get('type')
      ]);

      $document->save();

      return response()->json('success');
    }

    public function index()
    {
      return new DocumentCollection(Document::all());
    }

    public function edit($id)
    {
      $document = Document::find($id);
      return response()->json($document);
    }

    public function update($id, $id1, Request $request)
    {
        $imageName = "perfil.".time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('documents/fotos'), $imageName);

        $document = Document::find($id);

        $document->update([

        'name' => 'http://localhost/terapias/public/documents/fotos/'.$imageName,
        'type' => $request->image->getClientOriginalExtension(),
        'user_id' => $id1

        ]);
    
        return response()->json('successfully updated');
    }

    public function delete($id)
    {
      $document = Document::find($id);

      $document->delete();

      return response()->json('successfully deleted');
    }

    public function foto($id, Request $request)
    {
      
        $imageName = "perfil.".time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('documents/fotos'), $imageName);
        
        $document = new Document([
        'name' => 'http://localhost/terapias/public/documents/fotos/'.$imageName,
        'type' => $request->image->getClientOriginalExtension(),
        'user_id' => $id
      ]);

        $document->save();

      return response()->json(['success'=>'You have successfully upload image.']);
    }

      public function fotoTest($id, Request $request)
    {

        $imageName = "test.".time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('documents/fotos'), $imageName);
        
        $document = new Document([
        'name' => 'http://localhost/terapias/public/documents/fotos/'.$imageName,
        'type' => 'Test de la Casa',
        'user_id' => $id
      ]);

        $document->save();


      return response()->json('Has finalizado tu test correctamente');
    }

    public function ultimo(){


        return new DocumentCollection(Document::all());

    }

}
