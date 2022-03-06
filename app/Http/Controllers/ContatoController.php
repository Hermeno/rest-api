<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contato;

class ContatoController extends Controller
{

    public function list() {
        $contato = contato::all();
        return $contato;
    }


    public function create(Request $request) {
        $cont = contato::create($request->all());
        return $cont;
    }


    public function select($id) {
        $contato = contato::find($id);
        return $contato;
    }


    public function update(Request $request, $id) {
        $contato = contato::findOrfail($id);
        $contato->update($request->all());
    }



    public function delete(Request $request, $id) {
        $contato = contato::find($id);
        $contato->delete();
    }    

}