<?php

namespace App\Http\Controllers\Police;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PoliceController extends Controller
{
    public function dashboard()
    {
        $ongoingReport = Report::where('police_id', auth()->id())->where('status', 'investigation')->first();
        $reports = Report::with('user')->where('status', 'approved')->get();
        return view('police.dashboard', compact('reports', 'ongoingReport'));
    }

    public function acceptReport(Report $report)
    {
        // Check if the police officer has an active investigation
        $activeInvestigation = auth()->user()->activeInvestigation();
        if ($activeInvestigation) {
            return redirect()->route('police.dashboard')->withErrors('You already have an active investigation.');
        }

        // Assign the report to the police officer
        auth()->user()->assignReport($report);
        return redirect()->route('police.dashboard')->with('success', 'Report accepted for investigation.');
    }

    public function activeInvestigation()
    {
        return $this->reports()->where('status', 'investigating')->first();
    }

    public function assignReport(Report $report)
    {
        $report->update(['status' => 'investigating', 'police_user_id' => $this->id]);
    }

    public function rejectReport(Report $report)
    {
        $report->update(['status' => 'rejected']);
        return redirect()->route('police.dashboard')->with('success', 'Report rejected.');
    }

    public function archiveReport(Report $report)
    {
        $report->update(['status' => 'archived']);
        return redirect()->route('police.dashboard')->with('success', 'Report archived.');
    }
}
