<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

  public function liens_utiles()
   {
       return view('front.liens_utiles');
   }

   public function contact()
   {
       return view('front.contact');
   }

   public function galerie()
   {
       return view('front.galerie');
   }

}
