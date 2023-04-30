<?php

namespace App\Http\Controllers\Police;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function updateStatus(Request $request, Report $report)
    {
        $action = $request->input('action');
        $user = auth()->user();

        switch ($action) {
            case 'accept':
                $report->status = 'investigation';
                $report->police_id = $user->id;
                $existingReport = Report::where('police_id', $user->id)
                    ->where('status', 'investigation')
                    ->first();
                if ($existingReport) {
                    return response()->json([
                        'success' => false,
                        'message' => 'You are already handling a case. Please close it before accepting a new one.'
                    ]);
                }
                break;
            case 'reject':
                $report->status = 'rejected';
                $report->police_id = null;
                break;
            case 'close':
                $report->status = 'closed';
                break;
            default:
                return response()->json(['success' => false, 'message' => 'Invalid action']);
        }

        $report->save();

        return response()->json(['success' => true]);
    }
}
