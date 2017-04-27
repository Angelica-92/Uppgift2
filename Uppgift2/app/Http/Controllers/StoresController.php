<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;
use App\Store;
/*
1. Shows all resources
3. Stores a new resource
*/
class StoresController extends Controller
{
    public function index(){
      $stores = Store::all();
      return response()->json($stores);
    }
}
