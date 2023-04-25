<?php

namespace App\Http\Controllers;

use App\Services\Post\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
