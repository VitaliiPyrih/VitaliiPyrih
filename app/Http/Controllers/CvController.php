<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CvController extends BaseController
{
    public function __invoke()
    {
        $locale  = App::getLocale();
        return view('cv',compact('locale'));
    }
}
