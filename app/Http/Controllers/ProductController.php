<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Session;
class ProductController extends Controller
{
    function index(){
        $data = Product::all();
        return view('products', ['products'=>$data]);
    }
    function detail($id){
        $data = Product::find($id);
        return view('details', ['product'=>$data]);
    }
    function search(Request $req){
        $data = Product::where('name', 'LIKE', '%'.$req->input('query').'%')->get();
        return view('search', ['products'=>$data]);
    }

    function add_to_cart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else return redirect('login');       
    }
    static function total_cart_item(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
    function cartList(){
        $userId = Session::get('user')['id'];
        $products=DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->select('products.*', 'cart.id as cart_id')
        ->get();

        return view('cartList', ['products'=>$products]);
    }

    function removeItem($id){
        Cart::destroy($id);
        return redirect('cartList');
    }

    function order(){
        $userId = Session::get('user')['id'];
        $total = $products=DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->sum('products.price');

        return view('order', ['total'=>$total]);

    }
}
