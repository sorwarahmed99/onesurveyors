<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function services(){
        return view('services');
    }

    public function projects(){
        return view('projects');
    }

    public function news(){
        return view('news');
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function contact(){
        return view('contact');
    }



    public function service(Service $service){
        return view('party-wall');
    }
}
