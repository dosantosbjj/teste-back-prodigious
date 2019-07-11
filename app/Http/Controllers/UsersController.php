<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Users::all();
        return view('users.users', compact('usuarios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('users.form');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Users();
        $usuario->nome = $request->input('nome');
        $usuario->email = $request->input('email');
        $usuario->descricao = $request->input('descricao');
            if($request->hasFile('anexo')){
                $arquivo = $request->anexo->store('public');
                $usuario->anexo = $arquivo;
            }else{
                $usuario->anexo = '';
            }
        if($usuario->save()){
            return redirect('users');
    }
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Users::find($id);
        return view('users.edit', compact('usuario'));
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
       $usuario = Users::findOrfail($id);
       $usuario->nome = $request->input('nome');
       $usuario->email = $request->input('email');
       $usuario->descricao = $request->input('descricao');
        if($request->hasFile('anexo')){
            $arquivo = $request->anexo->store('public');
            $usuario->anexo = $arquivo;
        }else{
            $usuario->anexo = '';
        }
        if($usuario->save()){
            return redirect('users');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Users::findOrfail($id);
        if($usuario->delete()){
            return redirect('users');
        }
    }

    public function look(){
        return view('users.search');
    }

    public function searchUser(Request $request){
        $keywords = $request->input('pesquisa');
        if(strlen($keywords) < 3){
            return response()->json([]);
        }

        $data = Users::where('nome', 'LIKE', '%'. $keywords .'%')->get();
        return response()->json($data);
        }
}
