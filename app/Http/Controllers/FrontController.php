<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

   public function club()
   {
       return view('front.club');
   }

   public function liens_utiles()
   {
       return view('front.liens_utiles');
   }

}
