<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
         return view('frontend.index');
    }
    public function about()
    {
         return view('frontend.pages.about-us');
    }
    public function features()
    {
         return view('frontend.pages.features');
    }
    public function testomonials()
    {
         return view('frontend.pages.testomonials');
    }
    public function pricing()
    {
         return view('frontend.pages.pricing');
    }
    public function services()
    {
         return view('frontend.pages.services');
    }
    public function contact()
    {
         return view('frontend.pages.contact');
    }
    public function portfolio()
    {
         return view('frontend.pages.portfolio');
    }
}
