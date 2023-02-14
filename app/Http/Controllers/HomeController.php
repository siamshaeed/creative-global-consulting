<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\University;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::role('user')->get();
        $universitys = University::get();
        $files = File::get();

        return view('dashboard', compact('users', 'universitys', 'files'));
    }

}
