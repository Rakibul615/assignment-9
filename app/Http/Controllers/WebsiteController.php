<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('master');
    }
    public function about()
    {
        return view('website.about');
    }
    public function service()
    {
        return view('website.service');
    }
    public function project()
    {
        return view('website.project');
    }
    public function contact()
    {
        return view('website.contact');
    }
}
