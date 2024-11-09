<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;

use Session;
use Stripe;

class HomeController extends Controller
{
    
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype==1)
        {
          

            return view('admin.home');
        }
        
    }
 

    public function products()
    {
        $product=Product::paginate(6);
        
        return view('home.products',compact('product'));
    }
    public function add_to_cart(Request $request,$id)
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $product=Product::find($id);
            $cart=new Cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->adress=$user->address;
            $cart->user_id=$user->id;
            $cart->product_title=$product->title;
            if($product->discount_price!=null)
            {
                $cart->price=$product->discount_price * $request->quentity;
            }
            else
            {
                $cart->price=$product->price * $request->quentity;
            }
            
            $cart->image=$product->image;
            $cart->product_id=$product->id;
            $cart->quentity=$request->quentity;

            $cart->save();

            return redirect()->back();

        }
        else
        {
            return redirect('login');
        }
    }
    public function show_cart()
    {
        if(Auth::id())
        {
            $id=Auth::user()->id;
            $cart=Cart::where('user_id','=',$id)->get();
            return view('home.show_cart',compact('cart'));
        }
        else
        {
            return redirect('login');
        }
    }
    public function remove_card($id)
    {
        $cart=Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('delete','delete successfully');

    }
    

    public function stripe($totalprice)
    {
        return view('home.stripe', compact('totalprice'));
    }

    
    public function contact()
    {
        return view('home.contact');
    }
  
}
