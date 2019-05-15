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
        //dd("here");
        

        if(Auth::user()->user_type==1)
        {
            return redirect('admin/dashboard');
        }
        else
        {
            if(Auth::user()->user_type != 3 && !Auth::user()->user_type != 1 )
            {


                return redirect('/dashboard');
            }
            else {
                return redirect('/')->with('error','Something went wrong');
            }
        }
        
    }

    public function showArtistRegistrationForm($type = null)
    {
        return view('artist-registration', ['type'=>$type]);
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
                'gender' => $request->gender,
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

    public function viewArtistListingPage(Request $request)
    {

        $user_types[1] = "admin";
        $user_types[2] = "sub_admin";
        $user_types[3] = "user";
        $user_types[4] = "writer";
        $user_types[5] = "painter";
        $user_types[6] = "singer";
        $user_types[7] = "dancer";
        $user_types[8] = "costume_designer";
        $user_types[9] = "makeup_artist";
        $user_types[10] = "Photographer";
        $user_types[11] = "Film Maker";
        $user_types[12] = "Actor";
        $user_types[13] = "Fashion Model";
        $user_type = base64_decode(request()->segment(3));
        $user_details = User::where('user_type',$user_type)->get();
        return view('listing-page',compact('user_details','user_types'));
    }

    public function viewArtistDetailPage()
    {
        $user_types[1] = "admin";
        $user_types[2] = "sub_admin";
        $user_types[3] = "user";
        $user_types[4] = "writer";
        $user_types[5] = "painter";
        $user_types[6] = "singer";
        $user_types[7] = "dancer";
        $user_types[8] = "costume_designer";
        $user_types[9] = "makeup_artist";
        $user_types[10] = "Photographer";
        $user_types[11] = "Film Maker";
        $user_types[12] = "Actor";
        $user_types[13] = "Fashion Model";
        $user_id = base64_decode(request()->segment(3));
        $user_details = User::where('id',$user_id)->first();
        return view('listing-detail-page',compact('user_details','user_types'));
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
