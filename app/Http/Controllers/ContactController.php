<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index_contact(){
        //Parte do que será feito 
    }

    public function contact(){
        return view('events.contact');
           
    }
}
