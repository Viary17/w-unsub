<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Fasilitas extends BaseController
{
    public function index()
    {
        return view('fasilitas/index');
    }
}
