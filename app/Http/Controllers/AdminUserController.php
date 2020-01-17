<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminUserController extends Controller
{
    public function index(){
        return view('admin');
    }

    public function store()
    {
        Alert::success('Success Title', 'Success Message');

        return redirect('/admin');
    }
}
