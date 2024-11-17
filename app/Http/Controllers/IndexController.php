<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class IndexController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function tour($slug){
        return view('pages.tour.home');
    }
    public function detail_tour($slug){
        return view('pages.tour.detail');
    }

}
