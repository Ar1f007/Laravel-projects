<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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
}
