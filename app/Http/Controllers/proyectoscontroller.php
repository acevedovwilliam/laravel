<?php

namespace App\Http\Controllers;

use App\Models\proyectos;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class proyectoscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos=proyectos::all();
        return view('proyectos.index',['proyectos'=>$proyectos]);
    }

    /**
     * desplegar reporte en PDF.
     */
    public function pdf(){
        //return view('proyectos.pdf');
        $proyectos=proyectos::all();
        $pdf = Pdf::loadView('proyectos.pdf', compact('proyectos'));
        return $pdf->stream();
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:80',
            'fuente' => 'required|max:80',
            'mplanificado' => 'required',
            'mpatrocinado' => 'required',
            'mpropio' => 'required'
            ]);
            $proyecto=new proyectos();
            $proyecto->nombre=$request->input('nombre');
            $proyecto->fuente=$request->input('fuente');
            $proyecto->mplanificado=$request->input('mplanificado');
            $proyecto->mpatrocinado=$request->input('mpatrocinado');
            $proyecto->mpropio=$request->input('mpropio');
            $proyecto->save();
            return view("proyectos.message",['msg' => "Registro guardado"]);

    }

    /**
     * Display the specified resource.
     */
    public function show(proyectos $proyectos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proyectos=proyectos::find($id);
       return view('proyectos.edit',['proyectos'=>$proyectos]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'nombre' => 'required|max:80',
            'fuente' => 'required|max:80',
            'mplanificado' => 'required',
            'mpatrocinado' => 'required',
            'mpropio' => 'required'
            ]);
            $proyecto=proyectos::find($id);
            $proyecto->nombre=$request->input('nombre');
            $proyecto->fuente=$request->input('fuente');
            $proyecto->mplanificado=$request->input('mplanificado');
            $proyecto->mpatrocinado=$request->input('mpatrocinado');
            $proyecto->mpropio=$request->input('mpropio');
            $proyecto->save();
            return view("proyectos.message",['msg' => "Registro guardado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proyectos =proyectos::find($id);
        $proyectos->delete();
        return redirect("proyectos");
    }
}
