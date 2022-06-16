<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tittle = 'Amuka';

        return view('Pages.home', compact('tittle'));
    }
    public function about()
    {
        $intro = 'Am new here';
        return view('Pages.about')->with('intro', $intro);
    }

    public function services()
    {
        $data = array('tittle' => 'Our services', 'works' => array('Web Design', 'Digital Marketing', 'Domain Registration'));
        return view('Pages.services')->with($data);
    }
}
