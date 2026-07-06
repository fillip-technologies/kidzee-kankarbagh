<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TransferCertificate;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class StudentTransferController extends Controller
{
    public function index()
    {
        return view('admin.studentTransfer.create');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'admission_no' => 'required',
            'tc_no' => 'required',
            'tc_file' => 'required|mimes:pdf,jpg,jpeg,png',
        ]);

        $file = $request->file('tc_file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('tc_files'), $filename);
        TransferCertificate::create([
            'admission_no' => $request->admission_no,
            'tc_no' => $request->tc_no,
            'tc_file' => 'tc_files/' . $filename,
        ]);

        return redirect('/stu/tc/cet')->with('success', 'Transfer Certificate Uploaded Successfully!');
    }

    public function list()
    {
        $datas = TransferCertificate::all();
        return view('admin.studentTransfer.index', compact('datas'));
    }

    public function get_edit($id)
    {
        $data_edit = TransferCertificate::where('id', $id)->first();
        return view('admin.studentTransfer.edit', compact('data_edit'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'admission_no' => 'required',
            'tc_no' => 'required',
            'tc_file' => 'nullable|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $tc = TransferCertificate::findOrFail($id);
        $tc->admission_no = $request->admission_no;
        $tc->tc_no = $request->tc_no;

        if ($request->hasFile('tc_file')) {
            if ($tc->tc_file && file_exists(public_path($tc->tc_file))) {
                unlink(public_path($tc->tc_file));
            }

            $file = $request->file('tc_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('tc_files'), $filename);
            $tc->tc_file = 'tc_files/' . $filename;
        }
        $tc->save();
        return redirect('/stu/tc/cet')->with('success', 'Transfer Certificate Updated Successfully!');
    }


    public function delete_tct($id)
    {

        $dataDelete = TransferCertificate::findOrFail($id)->delete();
        if ($dataDelete) {
            return back()->with('success', 'Student Transfer Certificate Deleted !');
        }
    }
}
