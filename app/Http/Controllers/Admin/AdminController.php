<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;

class AdminController extends Controller
{
    public function dashboard()
    {
        $pendingReports = Report::with('user')->where('status', 'pending')->get();
        $approvedReports = Report::with('user')->where('status', 'approved')->get();
        $rejectedReports = Report::with('user')->where('status', 'rejected')->get();

        return view('admin.dashboard', compact('pendingReports', 'approvedReports', 'rejectedReports'));
    }

    public function approveReport(Report $report)
    {
        $report->update(['status' => 'approved']);
        return redirect()->route('admin.dashboard')->with('success', 'Report approved.');
    }

    public function rejectReport(Report $report)
    {
        $report->update(['status' => 'rejected']);
        return redirect()->route('admin.dashboard')->with('success', 'Report rejected.');
    }
}
