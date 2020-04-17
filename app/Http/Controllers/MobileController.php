<?php

namespace App\Http\Controllers;

use App\Mobile;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function __construct(Mobile $model)
    {
        $this->model = $model;
    }

    public function allMobile() {
        return $this->model->all();
    }
}
