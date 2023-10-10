<?php

namespace App\Http\Controllers;

use App\Models\Product2;
use Illuminate\Http\Request;

class Noticias2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     
        $product2s = Product2::latest()->paginate();
     
        return view('site.noticias_2',compact('product2s'));

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
