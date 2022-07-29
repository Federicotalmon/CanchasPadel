<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Http\Requests\StoreLocalRequest;
use App\Http\Requests\UpdateLocalRequest;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locales.crear_local');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLocalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocalRequest $request)
    {
        $local = new Local();
        $local->telefono = $request->telefono;
        $local->direccion = $request->direccion;
        $local->nombre = $request->nombre;
        $img = file_get_contents("https://scontent.fcnq2-2.fna.fbcdn.net/v/t1.6435-9/134130211_261275285674172_7525319496645181994_n.jpg?stp=cp0_dst-jpg_e15_fr_q65&_nc_cat=111&ccb=1-7&_nc_sid=dd9801&_nc_ohc=x82apIDJxpkAX9eSWaq&_nc_ht=scontent.fcnq2-2.fna&oh=00_AT8vUN3HCOcEROGFqWVdqmxpxTNiDUvACbOYdTV-PlMR4Q&oe=62F4BAB6");
        $local->imagen = base64_encode($img);
        $local->save();
        return redirect()->back()->with('message', 'Local creado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $locales = Local::all();

        return view('locales.locales', ['locales' => $locales]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function edit(Local $local)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLocalRequest  $request
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocalRequest $request, Local $local)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $local = Local::findOrFail($id);
        $local->delete();
        return redirect()->back()->with('message', 'Local eliminado correctamente!');
    }
}
