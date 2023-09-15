<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendForm;
use App\Mail\ContactForm;
use App\Models\UsersForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendFormController extends BaseController
{
    public function __invoke(SendForm $request)
    {
        return $this->service->save($request);
    }
}
