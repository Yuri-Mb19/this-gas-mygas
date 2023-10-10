<?php

namespace App\Http\Controllers;

use App\Models\Product2;
use Illuminate\Http\Request;

class Product2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product2s = Product2::latest()->paginate(5);
     
        return view('crudd2',compact('product2s'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
   
        $input = $request->all();
   
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
     
        Product2::create($input);
      
        return redirect()->route('crudd2')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product2 $product2)
    {
        return view('show2',compact('product2'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product2 $product2)
    {
        return view('edit2',compact('product2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product2 $product2)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);
   
        $input = $request->all();
   
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
           
        $product2->update($input);
     
        return redirect()->route('crudd2')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product2 $product2)
    {
        $product2->delete();
      
        return redirect()->route('crudd2')
                        ->with('success','Product deleted successfully');
    }
}
