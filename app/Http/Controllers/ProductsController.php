<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index_product(){
        //Parte do que será feito 
    }

    public function product(){
         return view('events.product');
    }
}
