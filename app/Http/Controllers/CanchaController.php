<?php

namespace App\Http\Controllers;

use App\Models\Cancha;
use App\Http\Requests\StoreCanchaRequest;
use App\Http\Requests\UpdateCanchaRequest;
use App\Models\Local;

class CanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view ('canchas.crear_cancha', ['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCanchaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCancha(StoreCanchaRequest $request, $id)
    {
        $local = Local::findOrFail($id);
        $cancha = new Cancha();
        $cancha->nombre_cancha = $request->nombre_cancha;
        $cancha->local_id = $local->id;
        $cancha->save();
        return redirect()->back()->with('message', 'Cancha creada correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cancha  $cancha
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $local = Local::findOrFail($id);
        $canchas = $local->canchas;
        return view ('canchas.canchas', ['canchas' => $canchas ,'local_id' => $id ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cancha  $cancha
     * @return \Illuminate\Http\Response
     */
    public function edit(Cancha $cancha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCanchaRequest  $request
     * @param  \App\Models\Cancha  $cancha
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCanchaRequest $request, Cancha $cancha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cancha  $cancha
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cancha = Cancha::findOrFail($id);
        $cancha->delete();
        return redirect()->back()->with('message', 'Cancha eliminada correctamente!');        
    }
}
