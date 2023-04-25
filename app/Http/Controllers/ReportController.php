<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Category;
use App\Models\Report;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $this->authorize('view-reports');

        $reports = Report::all();

        return view('reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('reports.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'category_id' => 'required|integer',
            'description' => 'required',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Report::create([
            'user_id' => auth()->user()->id,
            'image' => $imageName,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'status' => 'pending',
        ]);

        Log::info("Report submitted successfully by user: " . auth()->user()->id);

        return redirect()->route('reports.index')->with('success', 'Report submitted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function userReports() {
        $user_id = auth()->user()->id;
        $reports = Report::where('user_id', $user_id)->get();
        
        return view('reports', compact('reports'));
    }

    public function adminReports() {
        $reports = Report::whereIn('status', ['pending', 'rejected'])->get();

        return view ('admin.reports', compact('reports'));
    }

    public function approveReport(Report $report) {
        $report->update(['status' => 'approved']);

        return redirect()->route('admin.reports')->with('success', 'Report approved successfully');
    }

    public function rejectReport(Report $report) {
        $report->update(['status' => 'rejected']);

        return redirect()->route('admin.reports')->with('success', 'Report rejected successfully');
    }
}
