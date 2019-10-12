<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function create(Request $request)
    {
        $request->session()->flash('status', 'Task was successful!');

    }

    public function select(Request $request)
    {
        echo session('status');
    }
}
