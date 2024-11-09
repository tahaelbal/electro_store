<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;



class AdminController extends Controller
{

    
       





    public function view_product()
    {
        
        return view('admin.product');
    }
    

    public function add_product(Request $request)
    {
        $product = new Product;

        $product->title=$request->title;
        $product->description=$request->descreption;
        $product->price=$request->price;
        $product->discount_price=$request->dis_price;
        $product->quantity=$request->quantity;
        $product->category=$request->category;

        // image
        $image=$request->image;
        // $request->file('image')->getClientOriginalExtension();
        $imagename=time().'.'.$image->getClientOriginalExtension();
        // $imagename=time().'.'.$request->file('image')->getClientOriginalExtension();
        $request->image->move('product',$imagename);

        $product->image=$imagename;

        // end image
        $product->save();
        return redirect()->back()->with('message','Product add successfully');
    }




    public function show_product()
    {
        $product=product::all();
        return view('admin.show_product',compact('product'));
    }

    


    public function delete_product($id)
    {
        $data=Product::find($id);

        $data->delete();

        return redirect()->back()->with('delete','delete successfully');

    }
    


    public function updat_product($id)
    {
        $product=Product::find($id);
        
        return view('admin.updat_product',compact('product'));
    }

    
    




    public function update_product_confirm(Request $request,$id)
    {
        $product=product::find($id);

        $product->title=$request->title;
        $product->description=$request->descreption;
        $product->price=$request->price;
        $product->discount_price=$request->dis_price;
        $product->quantity=$request->quantity;
      



        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);
            $product->image=$imagename;
        }

        $product->save();
        return redirect()->back()->with('message','Product Edit successfully');
        
    }
    


    
    
    

    
    

}
