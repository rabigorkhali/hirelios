<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Partner;
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
            $data['page']=Page::where('slug','index')->where('status',1)->first();
            $data['partners']=Partner::where('status',1)->orderby('position')->get();
            $data['testimonials']=Testimonial::where('status',1)->orderby('position')->get();
            return view('frontend.index', $data);
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
}
