<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request, Report $report) {
        $request->validate([
            'image' => 'required|file|mimes:jpeg,png,jpg|max:2048', // 2MB
        ]);

        // Store the uploaded image
        $path = $request->file('image')->store('public/images/reports');

        $image = new Image([
            'report_id' => $report->id,
            'file_name' => $request->file('image')->getClientOriginalName(),
            'file_path' => $path,
        ]);

        $image->save();

        return back()->with('success', 'Image Uploaded Successfully.');
    }
}
