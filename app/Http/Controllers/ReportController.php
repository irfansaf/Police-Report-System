<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    public function index() {
        return view('reports.view');
    }

    public function show(Report $report) {
        return view('reports.detail', compact('report'));
    }

    public function create() {
        return view('reports.create');
    }
    public function createReport(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'location' => 'required',
            'images.*' => 'mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = Auth::user();

        $report = new Report([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'status' => 'pending',
        ]);

        $user->reports()->save($report);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('images/reports'), $imageName);
                $report->images()->create(['image_path' => 'images/reports/' . $imageName]);
            }
        }

        return redirect()->route('dashboard')->with('success', 'Report submitted successfully');
    }
}
