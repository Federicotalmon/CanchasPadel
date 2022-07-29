<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Local;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }
    public function create_duenio()
    {
        return view('auth.register_duenio');
    }
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'telefono' => ['required', 'numeric', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'telefono' => $request->telefono,
        ]);
        $user->assignRole('jugador');

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function store_duenio(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'telefono' => ['required', 'numeric', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
 //           'nombre_local' => ['required', 'string', 'unique:locales'],
            'telefono_local' => ['required','numeric'],
            'direccion' => ['required', 'string'],
        ]);

        $user = User::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'telefono' => $request->telefono,
        ]);
        $user->assignRole('duenio');

        $img = file_get_contents("https://scontent.fcnq2-2.fna.fbcdn.net/v/t1.6435-9/134130211_261275285674172_7525319496645181994_n.jpg?stp=cp0_dst-jpg_e15_fr_q65&_nc_cat=111&ccb=1-7&_nc_sid=dd9801&_nc_ohc=x82apIDJxpkAX9eSWaq&_nc_ht=scontent.fcnq2-2.fna&oh=00_AT8vUN3HCOcEROGFqWVdqmxpxTNiDUvACbOYdTV-PlMR4Q&oe=62F4BAB6");
        $local = Local::create([
            'direccion' => $request->direccion,
            'telefono' => $request->telefono_local,
            'nombre' => $request->nombre_local,
            'user_id' => $user->id,
            'imagen' => base64_encode($img),
        ]);
        

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
