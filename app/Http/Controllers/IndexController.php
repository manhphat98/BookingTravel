<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tour;

class IndexController extends Controller
{
    public function index(){
        // Lấy danh sách tour từ cơ sở dữ liệu
        $tours = Tour::where('status', 1)->get(); // Lọc các tour hiển thị (status = 1)
        return view('pages.home', compact('tours'));
    }

    public function tour($slug){
        return view('pages.tour.home');
    }

    public function detail_tour($slug)
    {
        // Lấy thông tin tour theo slug
        $tour = Tour::where('slug', $slug)->firstOrFail();

        // Truyền dữ liệu sang view
        return view('pages.tour.detail', compact('tour'));
    }

}
