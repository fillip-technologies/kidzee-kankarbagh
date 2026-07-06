<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    public function get_careers()
    {
        $careers = Contact::all();
        return view('admin.career', compact('careers'));
    }
}
