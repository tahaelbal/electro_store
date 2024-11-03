<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;

use Session;
use Stripe;

class HomeController extends Controller
{
    public function index()
    {
        $product=Product::paginate(6);
        return view('home.userpage',compact('product'));
    }
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
        $category=Category::all();
        return view('home.products',compact('product','category'));
    }
    
   
  
  

    
   
    

    

    
}
