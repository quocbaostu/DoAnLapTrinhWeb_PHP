<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getListAdmin(){
        $admin = admin::all();
        return view('admin.account.listacc', compact('admin'));
    }
}
