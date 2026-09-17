<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billboard;

class AdminController extends Controller
{
    public function dashboard()
    {
        $billboardCount = Billboard::count();

        return view('admin.dashboard', compact('billboardCount'));
    }
}
