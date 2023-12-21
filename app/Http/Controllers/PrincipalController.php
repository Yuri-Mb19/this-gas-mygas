<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Product2;
use App\Models\Product3;
use Illuminate\Http\Request;
use App;
class PrincipalController extends Controller
{

    public function principal(){
        $products = Product::latest()->paginate();
        $product2s = Product2::latest()->paginate();
        $product3s = Product3::latest()->paginate();
        return view('site.principal', compact('products', 'product2s', 'product3s'));
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
