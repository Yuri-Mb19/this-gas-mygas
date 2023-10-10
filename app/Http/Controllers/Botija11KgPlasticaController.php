<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class Botija11KgPlasticaController extends Controller
{
    public function index(){
        return view('site.botija_11kg_plastica');
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
