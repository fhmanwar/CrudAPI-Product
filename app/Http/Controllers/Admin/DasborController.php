<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DasborController extends Controller
{
    public function index()
    {
        return view('admin.dasbor.list');
        // return redirect('/admin/dasbor','refresh');

    }
}
