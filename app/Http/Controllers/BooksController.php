<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;
use View;

class BooksController extends Controller
{
    public function __construct()
    {
        
    }

    function index()
    {   
        $data = Book::get('*') ;
    	return View::make('bookviews',['data' => $data]);
    }

    public function search(Request $request){
        if($request->ajax()){
            $data=Book::where('title','LIKE','%'.$request->search."%")->get();
            if($data){
                return Response($data);
            }else{
                $data = [] ; 
                return Response($data);
            } 
        }   
    }


    public function login(Request $request){
        $email = $request->email; 
        $password = $request->password ;
        if($email == "admin@gmail.com" &&  $password == "admin123"){
            return redirect()->route('admin');
        }else{
            return redirect()->route('beranda');
        }
    }

}