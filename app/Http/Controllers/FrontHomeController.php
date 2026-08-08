<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HowItWorks;
use App\Models\Post;
use App\Models\PricingPlan;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Therapist;
use App\PublishStatus;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::published()->orderBy('order')->get();
        $how_it_works = HowItWorks::orderBy('order')->get();
        $services = Service::published()->orderBy('order')->get();
        $therapists = Therapist::orderBy('order', 'ASC')->published()->limit(3)->get();
        $plans = PricingPlan::published()->orderBy('order')->get();
        $posts = Post::published()->latest()->limit(3)->get();

        return view('front-pages.home', compact('sliders', 'how_it_works', 'services', 'therapists', 'plans', 'posts'));
    }

    public function service_details($slug)
    {
        $service = Service::published()->where('slug', $slug)->firstOrFail();
        $all_services = Service::published()->orderBy('order')->get();
        return view('front-pages.service-details', compact('service', 'all_services'));
    }

    public function therapist_profile($slug)
    {
        $therapist = Therapist::published()->where('slug', $slug)->with(['posts' => fn($q) => $q->published(), 'posts.category'])->firstOrFail();
        return view('front-pages.therapist-profile', compact('therapist'));
    }

    public function contact_us()
    {
        $services = Service::published()->get();
        $therapists = Therapist::orderBy('order', 'ASC')->published()->get();
        return view('front-pages.contact-us', compact('services', 'therapists'));
    }

    public function blogs_index(Request $request)
    {
        $query = Post::published()->latest();
        if ($request->has('category')) {
            $query->whereHas('category', fn($q) => $q->where('slug', $request->category));
        }
        $posts = $query->paginate(9);
        $categories = Category::where('type', 'blog')->withCount(['posts' => fn($q) => $q->published()])->get();
        return view('front-pages.blogs', compact('posts', 'categories'));
    }

    public function blog_details($slug)
    {
        $post = Post::published()->where('slug', $slug)->firstOrFail();
        $categories = Category::where('type', 'blog')->withCount(['posts' => fn($q) => $q->published()])->get();
        $related_posts = Post::published()->where('category_id', $post->category_id)->where('id', '!=', $post->id)->limit(3)->get();
        return view('front-pages.blog-details', compact('post', 'categories', 'related_posts'));
    }

    public function alltherapists()
    {
        $therapists = Therapist::orderBy('order', 'ASC')->published()->get();
        return view('front-pages.alltherapists', compact('therapists'));
    }

    public function allservices()
    {
        $services = Service::published()->orderBy('order')->get();
        return view('front-pages.allservices', compact('services'));
    }
}
