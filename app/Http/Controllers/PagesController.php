<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to MyHR!';
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = "About Us";
        return view('pages.about')->with('title', $title);
    }

    public function functionalities(){
        // $title = "HR Functionalities";
        $data = array(
            'title' => 'HR Functionalities',
            'functionalities' => ['Recruit Employee', 'Promote Employee', 
                'Derank Employee', 'Raise Employee', 'Remove Employee']
        );
        return view('pages.functionalities')->with($data);
    }
}
