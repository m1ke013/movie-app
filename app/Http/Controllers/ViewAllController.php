<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewAllController extends Controller
{
    public function movies()
    {
        $data['title'] = "Movies";
        return view('view-all.view-all',$data);
    }
    
    public function tv_series()
    {
        $data['title'] = "TV Series";
        return view('view-all.view-all',$data);
    }
}
