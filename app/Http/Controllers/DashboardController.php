<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $clients = client::all();
        return view('dashboard.index', compact('clients'));
    }
}
