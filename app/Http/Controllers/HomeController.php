<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Oracle;
class HomeController extends Controller
{

    public function oracle()
    {
        $data = new Oracle;
        return $data;
    }
    
    public function index()
    {
        $product = DB::table('product')->get();
        return view('home', compact('product'));
    }
}
