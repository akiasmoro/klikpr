<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Retrieves the view for the index page of the frontend.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.newsdetail');
    }
}
