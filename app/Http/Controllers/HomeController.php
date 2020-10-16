<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $members = DB::table('members')->simplePaginate(12);
        return view('pages.index',compact('members'));
    }
}

