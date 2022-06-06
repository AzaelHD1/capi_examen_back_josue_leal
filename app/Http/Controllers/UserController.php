<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\User_domicilio;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //INNER JOIN de la tabla user_domicilio con user
        try {
            $users = User::join('user_domicilio', 'users.id', '=', 'user_domicilio.user_id')
            ->selectRaw('TIMESTAMPDIFF(YEAR,users.fecha_nacimiento,CURDATE()) AS edad, user_domicilio.domicilio, users.name , users.fecha_nacimiento, user_domicilio.numero_exterior, user_domicilio.colonia, user_domicilio.cp , user_domicilio.ciudad')
            ->get();
            //y se agregará un campo mas llamado edad en el resultado JSON
            return response()->json(['status' => 'OK', "data" => $users]);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'ERROR', "data" => $th]);
        }
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
