<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserDomicilioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::with('domicilios')->get();
        foreach ($usuarios as $user) {
            $hoy = date("Y-m-d");
            $edad = date_diff(date_create($user->fecha_nacimiento), date_create($hoy));
            $user->edad = $edad->format('%y');
            # code...
        }

        return $usuarios;
    }

   
}
