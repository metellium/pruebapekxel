<?php

namespace App\Http\Controllers;
use App\Dato;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index'); 
    }
    public function resumen()
    {
        $formulario=Dato::orderBy('id','ASC')->paginate(50);                
       return view('contenido.resumen')->with('formulario',$formulario);
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
        $datos_formulario = new Dato($request->all());
        $datos_formulario->save();
        return redirect()->route('formulario.index'); 
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
        $formulario = Dato::find($id);
                    
        return view('contenido.editar')->with('formulario',$formulario) ;
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
        $formulario = Dato::find($id);        
        $formulario ->tipo_ciclismo = $request->tipo_ciclismo;
        $formulario ->anios = $request->anios;
        $formulario ->horas = $request->horas;
        $formulario ->marcas = $request->marcas;       
        $formulario->save();
        return redirect('formulario/resumen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formulario = Dato::find($id);            
        $formulario->delete();        
        return redirect('formulario/resumen');
    }
}
