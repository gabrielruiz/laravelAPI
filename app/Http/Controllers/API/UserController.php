<?php

namespace LaravelAPI\Http\Controllers\API;

use Illuminate\Http\Request;
use LaravelAPI\Http\Controllers\Controller;
use LaravelAPI\API\Model\Users;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return response()->json(['name'=>'test']);
        return Users::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        //Instanciamos la clase Pokemons
        $Users = new Users;
        //Declaramos el nombre con el nombre enviado en el request
        $Users->name = $request->name;
        $Users->lastname = $request->lastname;
        //Guardamos el cambio en nuestro modelo
        $Users->save(); */

        return Users::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Solicitamos al modelo Users con el id solicitado por GET.
        //return Users::where('id', $id)->get();
        return Users::find($id);
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
    public function update(Request $request, $id)
    {
        $users = Users::findOrFail($id);
        $users->update($request->all());
        return response()->json($users, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = Users::find($id);
        if(!$users) return $this->noFoundMsg();
        $users->delete();

        return $this->deletedMsg();
    }

    private function noFoundMsg() {
        return response()->json('No found', 404);
    }

    private function deletedMsg() {
        return response()->json('Item Removed', 200);
    }
}
