<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adm;

class ViewController extends Controller
{
    public function index()
    {
        $viewinfo=Adm::orderBy('created_at', 'desc')->first();
        
        return view('view',compact('viewinfo'));
    }
}
