<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class RevendedoresController extends Controller
{
    public function revendedores(){
        return view('site.revendedores');
    }   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
  
        return redirect()->back();
    }
}
