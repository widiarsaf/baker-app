<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Oracle;

class ProductController extends Controller
{
   
     public function oracle()
    {
        $data = new Oracle;
        return $data;
    }
    
    public function uploadFile(Request $request, $fileName)
    {
            $result ='';
            $file = $request->file($fileName);
            $name = $file->getClientOriginalName();
            // $tmp_name = $file['tmp_name'];

            $extension = explode('.',$name);
            $extension = strtolower(end($extension));

            $key = rand().'-'. $fileName;
            $tmp_file_name = "{$key}.{$extension}";
            $tmp_file_path = "photoProduct/";
            $file->move($tmp_file_path,$tmp_file_name);

            $result = 'photoProduct'.'/'.$tmp_file_name;
        return $result;
    }


    public function index()
    {
        $product= DB::table('product')->get();
       return view('home',compact('product'));
    }

    
    public function create()
    {
        return view('create');
    }

    
    public function store(Request $request)
    {
        $foto = $this->uploadFile($request,'foto');
        $file_name = $foto;
        $upOracle = $this->oracle()->upFileOracle($file_name);
        DB::table('product')->insert(
            [
                'title'=>$request->title,
                'caption'=>$request->caption,
                'foto'=>$upOracle['message'],
            ]
        );

        return redirect()->route('product.index');
    }

}
