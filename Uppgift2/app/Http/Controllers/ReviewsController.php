<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Review;
/*
**1. Shows all resources
*/
class ReviewsController extends Controller
{
    public function index(){
      $reviews = Review::all();
      return response()->json($reviews);
    }
}
