<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

use App\Models\data;

use GuzzleHttp\Client;



class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos = data::all();
        return $datos;
    }   

        /*$client = new Client([
            'base_uri' => 'https://servicios.mem.gob.gt/api/api_prueba/prueba/read'
        ]);

        /*$response = Http::get("https://servicios.mem.gob.gt/api/api_prueba/prueba/read");
        
        return json_decode($posts);

        $response = $client->request('GET, posts');

        $posts =  json_decode($response->getBody()->getContent());

        return view('posts.index', compact('posts'));
        /*

        



    

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
        $datos =  new data();
        $datos->DPI = $request->DPI;
        $datos->NIT = $request->NIT;
        $datos->Nombre = $request->Nombre;
        $datos->Apellido = $request->Apellido;
        $datos->Direccion = $request->Direccion;
        $datos->Id_muni = $request->Id_muni;

        $datos->save();


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

        $datos = data::findOrFail($request->id);
        $datos->DPI = $request->DPI;
        $datos->NIT = $request->NIT;
        $datos->Nombre = $request->Nombre;
        $datos->Apellido = $request->Apellido;
        $datos->Direccion = $request->Direccion;
        $datos->Id_muni = $request->Id_muni;
        $datos->save();

        return $datos;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $datos = data::destroy($request->id);
        return $datos;
    }
}
