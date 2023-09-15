<?php

namespace App\Http\Controllers;

use App\Models\UsersForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class HomeController extends BaseController
{
    public function __invoke()
    {
        $locale  = App::getLocale();
        return view('main',compact('locale'));
    }
}
