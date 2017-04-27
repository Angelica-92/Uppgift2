<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
/*
1. Shows all resources
2. Shows a specific resources
3. Stores a new resource
*/
class ProductsController extends Controller
{
    public function index(){
      $products = Product::all();
      return response()->json($products);
    }

    public function show($id){
      $product = Product::find($id);
      $product->reviews = $product->reviews;
      $product->stores = $product->stores;
      return response()->json($product);
    }

    public function create(Request $request){

      $product = new Product();
      $product->title = $request->get("title");
      $product->brand = $request->get("brand");
      $product->price = $request->get("price");
      $product->image = $request->get("image");
      $product->description = $request->get("description");
      //$product->store = $request->("store");
      $product->save();

      //$product->id => $id;
      foreach ($request->get("stores") as $store) {
        DB::table('product_store')->insert([
          [
            "product_id" => $product->id,
            "store_id" => $store
          ]
      ]);
      }
      return response()->json(['success' => true]);
    }

}
