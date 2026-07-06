<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Publication;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        return view('admin.result.index');
    }

    public function store(Request $request)
    {

        $request->validate([
            'class'             => 'required|in:1,2,3,4,5,6,7,8,9,10,11,12',
            'section'           => 'required|string|max:5',
            'exam_type'         => 'required|string',
            'exam_date'         => 'required',
            'result_file'       => 'required|mimes:pdf,jpg,jpeg,png',

        ]);

        if ($request->hasFile('result_file')) {
            $resultFile = $request->file('result_file');
            $resultFileName = time() . '_result.' . $resultFile->getClientOriginalExtension();
            $resultFile->move(public_path('results'), $resultFileName);
            $resultFilePath = 'results/' . $resultFileName;
        }

        $result = new Result();
        $result->class = $request->class;
        $result->section = $request->section;
        $result->exam_type = $request->exam_type;
        $result->result_file = $resultFilePath ?? null;
        $result->exam_date = $request->exam_date;
        $result->save();
        return redirect('listing/result')->with('success', 'Result uploaded successfully.');
    }

    public function listing(){
        $result = Result::all();
        return view('admin.result.list_result',compact('result'));
    }

    public function delete_result($id){
        $data_delete = Result::where('id',$id)->first()->delete();
        if($data_delete){
            return back()->with('success','Result Deleted !');
        }
    }


   

}
