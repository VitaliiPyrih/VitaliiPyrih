<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Service\Form\Service;

class BaseController extends Controller
{
    public function __construct(public Service $service)
    {
    }
}
