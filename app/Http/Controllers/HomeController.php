<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Slider;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function homePage()
    {
        $images = Slider::all();
        $gallery = Gallery::all();
        return view('welcome', compact('images', 'gallery'));
    }

    // In HomeController.php
    public function franchise()
    {
        return view('pages.franchise');
    }

    /// ourstory
    public function ourstory()
    {
        return view('pages.ourstory');
    }

    //mision
    public function missionvision()
    {
        return view('pages.missionvision');
    }

    // prinicpal
    public function principalmessage()
    {
        return view('pages.principalmessage');
    }

    // director
    public function directormessage()
    {
        return view('pages.directormessage');
    }

    // 
    public function admissionenquiry()
    {
        return view('pages.admissionenquiry');
    }

    //team
    public function team()
    {

        $teacherTeams = Teacher::where('department', 'Teaching Team')->get();
        $leadershipTeam = Teacher::where('department', 'Leadership Team')->get();
        $specialists = Teacher::where('department', 'Specialists')->get();
        return view('pages.team', compact('teacherTeams', 'leadershipTeam', 'specialists'));
    }

    //team
    public function playgroup()
    {
        return view('pages.playgroup');
    }

    //gallery
    public function gallerycollins()
    {
        // dd("test");
        $allGallery = Gallery::all();
        return view('pages.gallerycollins', compact('allGallery'));
    }


    //nur
    public function nursery()
    {
        return view('pages.nursery');
    }

    //kinder
    public function kindergartencollins()
    {
        return view('pages.kindergartencollins');
    }

    //facilties
    public function facilitiescollinskids()
    {
        return view('pages.facilitiescollinskids');
    }

    // contact

    public function contact()
    {
        return view('pages.contact');
    }


    public function contact_store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required|string',

        ]);

        $contact = Contact::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'subject' => $request->subject
        ]);

        if ($contact) {
            return redirect('/contact')->with('success', 'Your message has been sent successfully!');
        }

    }

    public function get_carees()
    {
        $careers = Contact::all();
        return view('admin.career', compact('careers'));
    }
}
