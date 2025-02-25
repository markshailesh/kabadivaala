<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Campaign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function __construct(){
        $this->middleware('permission:dashboard', ['only'=>['index']]);
    }

    public function index(){
        return view('admin.dashboard',['page_title'=>'Dashboard']);
    }

}
