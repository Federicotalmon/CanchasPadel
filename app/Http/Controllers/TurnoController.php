<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use App\Models\User;
use App\Models\Local;
use App\Models\Cancha;
use App\Http\Requests\StoreTurnoRequest;
use App\Http\Requests\UpdateTurnoRequest;
use Illuminate\Support\Collection;
use Illuminate\Support\Carbon;
use Datetime;


class TurnoController extends Controller
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
        $local = User::findOrFail($id)->locales;
        $canchas = $local->canchas;
        return view ('turnos.crear_turno',['id'=>$id,'canchas'=> $canchas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTurnoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTurnoRequest $request)
    {
        $turno = new Turno();
        $turno->fecha = Carbon::createFromFormat('Y-m-d\TH:i', $request->fecha);
        $turno->cancha_id = $request->input('canchas');
        $turno->estado_id = 1;
        $turno->save();
        return redirect()->back()->with('message', 'Turno creado correctamente!');     
    }

    public function reservar($turno_id, $user_id){
        $turno = Turno::findOrFail($turno_id);
        $turno->update([
            'estado_id' => 2,
            'user_id' => $user_id,
        ]);
        return redirect()->back()->with('message', 'Turno reservado correctamente!'); 
    }


    public function cancelar($id){
        $turno = Turno::findOrFail($id);
        $turno->update([
            'estado_id' => 1,
            'user_id' => null,
        ]);
        return redirect()->back()->with('message', 'Reserva cancelada correctamente!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public static function show($id)
    {
        $local = User::findOrFail($id)->locales;
        $canchas = $local->canchas;
        $turnos = new Collection();
        foreach($canchas as $cancha){
            $turnos =  $turnos->merge($cancha->turnos);
        }
        return view ('turnos.turnos',['turnos'=>$turnos,'id'=>$local->user_id]);
    }

    public static function showTurnosCancha($id){
        $cancha = Cancha::findOrFail($id);
        $user_id = $cancha->local->user_id;
        return view ('turnos.turnos',['turnos'=>$cancha->turnos,'id'=>$user_id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function edit(Turno $turno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTurnoRequest  $request
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTurnoRequest $request, Turno $turno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turno = Turno::findOrFail($id);
        $turno ->delete();
        return redirect()->back()->with('message', 'Turno eliminado correctamente!');    
    }
}
