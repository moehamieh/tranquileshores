<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
    //
    public function index()
    {
        $sliders = Slider::orderBy('id' , 'DESC')->limit(1)->get();

        return view('front-pages.home', compact('sliders'));
    }
    public function service_details()
    {
        return view('front-pages.service-details');
    }

    public function therapist_profile()
    {
        return view('front-pages.therapist-profile');
    }

    public function contact_us()
    {
        return view('front-pages.contact-us');
    }

    public function blog_details()
    {
        return view('front-pages.blog-details');
    }


}
