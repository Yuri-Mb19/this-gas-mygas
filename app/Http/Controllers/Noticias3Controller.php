<?php

namespace App\Http\Controllers;

use App\Models\Product3;
use Illuminate\Http\Request;

class Noticias3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     
        $product3s = Product3::latest()->paginate(5);
     
        return view('site.noticias_3',compact('product3s'));

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
