<?php

namespace App\Http\Controllers;

use App\Models\Adm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewinfo=Adm::All();
        
        return view('admIndex',compact('viewinfo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admCreate');
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
    public function show($id)
    {
        $viewinfo=Adm::where('id',$id)->first();
        return view('view',compact('viewinfo'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $viewinfo=Adm::where('id',$id)->first();
        return view('adm',compact('viewinfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
            
            $deletimg=Adm::where('id',$id)->first();
            $tituloimg=$request->nomeimg.'.'.$request->img->extension(); 
            if($deletimg->path!==$tituloimg){
                Storage::delete('deletimg->path');
            }
            $path=$request->img->move(public_path('images'), $tituloimg);
            $update=Task::where('id', $request->id)->update([  
                'titulo' => $request->titulo,
                'nomeimg' => $request->nomeimg,
                'path' => $request->path,
                'action_text' => $request->action_text]);
                return redirect('adm');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Adm::where('id', $id)->first();
        $delete =Storage::delete('$delete->$path');
        $delete->delete();

        return redirect('adm');

    }
}
