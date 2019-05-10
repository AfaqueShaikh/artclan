<?php

namespace App\Http\Controllers;

use App\Modules\Ads\Models\Ads;
use App\Modules\BannerImage\Models\BannerImage;
use App\Modules\District\Models\District;
use App\Modules\FeaturedPatner\Models\FeaturedPatner;
use App\Modules\Testimonial\Models\Testimonial;
use App\User;
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

    public function showArtistRegistrationForm()
    {
        return view('artist-registration');
    }

    public function showRecruiterRegistrationForm()
    {
        return view('recruiter-registration');
    }

    public function registerArtist(Request $request)
    {
        User::create([

                'date_of_birth' => $request->date_of_birth,
                'language' => $request->language,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'user_type' => $request->category,
                'user_status' => '1',
                'name' =>$request->name,
                'password' => bcrypt($request->password),
            ]);

            return json_encode('Success');
            /*$languages = (explode(",",$data['language']));
            $available_to_work = (explode(",",$data['available_to_work']));
            dd($available_to_work);*/
    }

    public function registerRecruiter(Request $request)
    {
        return User::create([
            'represent' => $request->represent,
            'looking_for' => $request->i_am_looking,
            'company_name' => $request->company_name,
            'city' => $request->city,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'user_type' => '3',
            'user_status' => '1',
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);
        return json_encode('Success');

    }

    public function viewArtistListingPage()
    {
        return view('listing-page');
    }

    public function viewArtistDetailPage()
    {
        return view('listing-detail-page');
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
