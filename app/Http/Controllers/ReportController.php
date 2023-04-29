<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Model;

class ReportController extends Controller
{
    public function create() {
        return view('reports.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' =>'required',
            'description' => 'required',
            'location' => 'required',
        ]);

        $report = new Report([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'status' => 'pending',
        ]);

        $report->save();

        return redirect()->route('reports.index');
    }
}
