<?php

namespace App\Http\Controllers\Police;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index() {
        $reports = Report::where('status', 'approved')
            ->whereNull('police_id')
            ->get();

        return view('police.reports', compact('reports'));
    }

    public function accept(Report $report) {
        $current_officer = auth()->user();

        if ($current_officer->reports->count() > 0) {
            return redirect()->route('police.reports')->withErrors(['error' => 'You can only accept one report at a time.']);
        }

        // Assign the report to the police officer
        $current_officer->reports()->save($report);

        return redirect()->route('police.accept_reports')->with('success', 'Report accepted successfully');
    }
}
