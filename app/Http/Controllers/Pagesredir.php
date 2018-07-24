<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Pagesredir extends Controller
{
    function toHomepage()
    {
      return view('pages/homepage');
    }

    function toAbout()
    {
      return view('pages/about');
    }

    function evan()
    {
      return redirect()->route('alias');
    }
}
