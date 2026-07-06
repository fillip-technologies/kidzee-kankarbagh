<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\HNews;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        // echo "hi";
        $notices = HNews::latest()->paginate(10);
        return view('admin.notice.index', compact('notices'));
    }

    public function create()
    {
        return view('admin.notice.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'notice' => 'required|string',
            'link' => 'nullable|string',
            'type' => 'required|in:h,v',
        ]);

        HNews::create($request->all());

        return redirect()->route('admin.notice.index')
            ->with('success', 'Notice created successfully.');
    }

    public function edit(HNews $notice)
    {
        return view('admin.notice.edit', compact('notice'));
    }

    public function update(Request $request, HNews $notice)
    {
        $request->validate([
            'notice' => 'required|string',
            'link' => 'nullable|string',
            'type' => 'required|in:h,v',
        ]);

        $notice->update($request->all());

        return redirect()->route('admin.notice.index')
            ->with('success', 'Notice updated successfully.');
    }

    public function destroy(HNews $notice)
    {
        $notice->delete();

        return redirect()->route('admin.notice.index')
            ->with('success', 'Notice deleted successfully.');
    }
}
