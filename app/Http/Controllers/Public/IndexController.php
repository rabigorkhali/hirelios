<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Http\Requests\System\ContactUsRequest;
use App\Models\ContactUs;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Testimonial;


class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            $data = [];
            $data['page'] = Page::where('slug', 'index')->where('status', 1)->first();
            $data['partners'] = Partner::where('status', 1)->orderby('position')->get();
            $data['testimonials'] = Testimonial::where('status', 1)->orderby('position')->get();
            return view('frontend.index', $data);
        } catch (\Throwable $th) {
            abort(404);
        }
    }

    public function blogs()
    {
        try {
            $data = [];
            $data['blogs'] = Post::where('status', 1)->orderby('created_at', 'desc')->paginate(12);
            return view('frontend.blogs', $data);
        } catch (\Throwable $th) {
            abort(404);
        }
    }

    public function blogDetails($slug)
    {
        try {
            $data = [];
            $data['blog'] = Post::where('status', 1)->where('slug', $slug)->first();
            $data['blogs'] = Post::where('status', 1)->where('slug', '!=', $slug)->orderby('created_at', 'desc')->paginate(12);
            if (!$data['blog']) {
                abort(404);
            }
            return view('frontend.blog', $data);
        } catch (\Throwable $th) {
            abort(404);
        }
    }

    public function pageDirectUrl()
    {
        try {
            $data = [];
            $slug = request()->segment(count(request()->segments()));
            $data['page'] = Page::where('slug', $slug)->where('status', 1)->first();
            if (!$data['page']) {
                return view('frontend.pages.404-not-found');
            }
            return view('frontend.page', $data);
        } catch (\Throwable $th) {
            return view('frontend.pages.404-not-found');
        }
    }

    public function contact()
    {
        try {
            $data = [];
            $data['page'] = Page::where('slug', 'contact')->where('status', 1)->first();
            return view('frontend.contact', $data);
        } catch (\Throwable $th) {
            abort(404);
        }
    }

    public function contactSave(ContactUsRequest $request)
    {
        try {
            $inputData = $request->except('_token');
            ContactUs::create($inputData);
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'An error occurred while sending your message. Please try again later.');
        }

    }
}
