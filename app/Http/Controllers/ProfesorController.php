<?php

namespace App\Http\Controllers;

use App\Http\Requests\Models\Profesor;
use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;
use Illuminate\Support\Facades\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores = Profesor::paginate(5);
        $page = Request::get("page") ??1;
        return view("profesores.listado", ["profesores" => $profesores, "page"=>$page]);
//        return view("profesores.listado", compact("profesores", "page"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("profesores.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfesorRequest $request)
    {
        $valores = $request->input();
        $profesor = new Profesor($valores);
        $profesor->save();
        session()->flash("status", "Se ha creado el profesor $profesor->nombre");

        $profesores = Profesor::all();

        return view("profesores.listado", ["profesores" => $profesores]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $profesor = Profesor::find($id);
        $page= Request::get('page');
        return view("profesores.editar", ["profesor" => $profesor, 'page'=>$page]);

    }


    /**
     * Update the specified resource in storage.
     */
    public
    function update(UpdateProfesorRequest $request, Profesor $profesor)
    {
        $page=Request::get("page");

        $valores = $request->input(); //Leo los valores del formulario



        $profesor->update($valores);
        return response()->redirectTo(route("profesores.index",["page"=>$page]));}

    /**
     * Remove the specified resource from storage.
     */
    public
    function destroy(int $id)
    {
        $profesor = Profesor::find($id);
        $profesor->delete();
        $profesores = Profesor::all();
        session()->flash("status", "Se ha borrado $profesor->id");
        return view("profesores.listado", ["profesores" => $profesores]);
        //
    }
}



