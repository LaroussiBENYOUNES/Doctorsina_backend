<?php

namespace App\Http\Controllers;
use App\Models\PriceCategory;
use Illuminate\Http\Request;

class PagesController extends Controller
{  
  public function test(){return view('frontend/test');}
  public function rasa() {return view('rasa/models/');}
  //frontend pages
    public function index() {
      $categories = PriceCategory::with('options')->get();
      return view('frontend/pages/home',compact('categories'));
    }
    public function about() {return view('frontend/pages/about');}
    public function services() {return view('frontend/pages/services');}
    public function solutions() {return view('frontend/pages/solutions');}
    public function ourteam() {return view('frontend/pages/ourteam');}
    public function ourpartners() {return view('frontend/pages/ourpartners');}
  //End frontend pages
  
  public function dashboard() {return view('backend/pages/home');}
  public function login() {return view('backend/pages/login');}
  public function registre() {return view('backend/pages/registre');}


}
