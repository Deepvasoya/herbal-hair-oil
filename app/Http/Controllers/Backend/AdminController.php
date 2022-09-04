<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Registry;
use App\Models\Giftitem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('Backend.dashboard');
    }

}
