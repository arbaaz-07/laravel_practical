<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products=Product::all();
        $data=compact('products');
        return view('home')->with($data);
        
    }
    public function add()
    {
        return view('add');
    }
    
    public function insert(request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

    
            $input = $request->all();

            $image = $request->file('image');
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        // }
    
        product::create($input);
     
        return redirect('home');
  
    }

    public function delete($id){
            $products=product::find($id);
            $products->delete();
            return redirect('home');
    }

    public function edit($id)
    {
        $products=product::find($id);
        $data=compact('products');
        return view('edit')->with($data);
    }

    public function update(request $request ,$id)
    {
        $products=product::find($id);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
            $input = $request->all();
            $image = $request->file('image');
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        // }
    
        $products->name=$input['name'];
        $products->price=$input['price'];
        $products->description=$input['description'];
        $products->image=$profileImage;
        $products->save();
     
        return redirect('home');
        
    }
}
   

