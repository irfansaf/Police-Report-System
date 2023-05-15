<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $userReports = $user->reports;
        $reports = Report::paginate(10);

        return view('dashboard', compact('reports', 'userReports'));
    }
}
