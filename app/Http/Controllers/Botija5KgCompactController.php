<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Botija5KgCompactController extends Controller
{
    public function index(){
        return view('site.botija_5kg_compact');
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
