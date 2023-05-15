<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;

class UserController extends Controller
{
    public function dashboard(Request $request)
    {
        $user = Auth::user();
        $userReports = $user->reports()->orderBy('created_at', 'desc')->get();

        $status = $request->get('status');

        $reportsQuery = Report::where('status', '!=', 'pending')->orderby('created_at', 'desc');

        if ($request->has('status') && in_array($request->status, ['approved', 'investigation', 'rejected', 'closed'])) {
            $reportsQuery = $reportsQuery->where('status', $request->status);
        }

        $reports = $reportsQuery->paginate(10);

        return view('dashboard', compact('reports', 'userReports'));
    }
}
