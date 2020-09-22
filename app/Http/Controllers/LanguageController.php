<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LanguageController extends Controller
{
    public function index($language)
    {
        Session::put('language', $language);

        return redirect()->back();
    }
}
