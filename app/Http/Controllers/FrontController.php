<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function about() {
    return view('about');
   }

   public function team() {
      return view('team');
   }
     public function testimonials() {
      return view('testimonials');
   }

   public function services() {
      return view('services');
   }

   public function portfolio() {
      return view('portfolio');
   }

   public function pricing() {
      return view('Pricing');
   }

   public function blog() {
      return view('blog');
   }


   public function contact() {
    return view('contact');
   }
};
