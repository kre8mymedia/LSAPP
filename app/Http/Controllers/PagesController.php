<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome To Laravel';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $data = [
            'title' => 'About Us'
        ];
        return view('pages.about')->with($data);
    }

    public function services() {
        $data = [
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        ];
        return view('pages.services')->with($data);
    }
}
