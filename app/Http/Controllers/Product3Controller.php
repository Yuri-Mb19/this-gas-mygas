<?php

namespace App\Http\Controllers;

use App\Models\Product3;
use Illuminate\Http\Request;

class Product3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product3s = Product3::latest()->paginate(5);
     
        return view('crudd3',compact('product3s'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create3');
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
     
        Product3::create($input);
      
        return redirect()->route('crudd3')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product3 $product3)
    {
        return view('show3',compact('product3'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product3 $product3)
    {
        return view('edit3',compact('product3'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product3 $product3)
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
           
        $product3->update($input);
     
        return redirect()->route('crudd3')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product3 $product3)
    {
        $product3->delete();
      
        return redirect()->route('crudd3')
                        ->with('success','Product deleted successfully');
    }
}
