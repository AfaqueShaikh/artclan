<?php

namespace App\Http\Controllers;

use App\Modules\Ads\Models\Ads;
use App\Modules\BannerImage\Models\BannerImage;
use App\Modules\District\Models\District;
use App\Modules\FeaturedPatner\Models\FeaturedPatner;
use App\Modules\Testimonial\Models\Testimonial;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        if(Auth::user()->user_type==1)
        {
            return redirect('admin/dashboard');
        }
        else
        {
            if(Auth::user()->user_type==2)
            {
                return redirect('/customer/dashboard');
            }
            else {
                return redirect('/login')->with('error','Something went wrong');
            }
        }

    }

    public function showArtistLogin()
    {
        return view('artist-login');

    }

    public function getLocation(Request $request)
    {

        $location = District::all()->take(4);
        if(isset($request->name))
        {
            $location = District::where('name',$request->name)->get();
        }
        return json_encode($location);


    }

    public function showLandingPage(Request $request)
    {
        $banner_images = BannerImage::all();
        $advertisements = Ads::all();
        $featured_partners = FeaturedPatner::all();
        $testimonials = Testimonial::all();
        return view('welcome',compact('banner_images','advertisements','featured_partners','testimonials'));
    }

}
