<?php

namespace App\Http\Controllers;

use App\Models\Adm;
use Illuminate\Http\Request;

class AdmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewinfo=Adm::orderBy('created_at', 'desc')->first();
        
        return view('adm',compact('viewinfo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        
        if($request->hasFile('img')){
           
            $titulo=$request->nomeimg.'.'.$request->img->extension(); ;
            $path=$request->img->move(public_path('images'), $titulo);
              
            $store = new Adm;
            $store->titulo=$request->titulo;
            $store->nomeimg=$request->nomeimg;
            $store->path=$path;
            $store->action_text=$request->action_text;
     
            
            $store->save();


        }else{
            
            $store = new Adm;
            $store->titulo=$request->titulo;
            $store->save();
            return view('welcome');

        }
      
       
       return view('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(Adm $adm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adm $adm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adm $adm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adm $adm)
    {
        //
    }
}
