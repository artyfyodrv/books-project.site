<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminPanelController extends Controller
{
    public function showAdminPanel()
    {
        return view('admin/index');
    }
}
