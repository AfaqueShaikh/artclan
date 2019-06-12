<?php

namespace App\Modules\Recruiter\Controllers;

use App\Modules\ArtistContactRequest\Models\ArtistRequest;
use App\Modules\User\Models\ArtistOfTheDay;
use App\Modules\User\Models\ArtistRequestForRecruiterAccount;
use App\Modules\User\Models\Education;
use App\Modules\User\Models\Experience;
use App\Modules\User\Models\Genre;
use App\Modules\User\Models\UserDocument;
use App\Modules\User\Models\UserPhoto;
use App\Modules\User\Models\UserVideo;
use App\Modules\User\Models\WritingType;
use App\ProfileCounts;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Mail;
use Validator;
use DataTables;
use Image;
use Storage;
use App\Modules\ContactUs\Models\EmailTemplate;
use App\Modules\ContactUs\Models\GlobalValue;


class RecruiterController extends Controller
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


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function recruiterDashboard()
    {
        $userData = Auth::user();

        $user_types[3] = "Recruiter";
        /*$cities = \App\Modules\District\Models\District::all();
        $view_profile = ProfileCounts::where('user_id',Auth::user()->id)->count();
        $userPhysicsData = Auth::user()->userPhysics;
        $userWritingType = Auth::user()->userWritingType;
        $userGenre = Auth::user()->userGenre;*/

        
        
        return view('Recruiter::recruiter-dashboard',['userData'=>$userData, 'user_types'=>$user_types]);
    }
    
    /**
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function recruiterEditProfile(Request $request)
    {
        $edit_information = User::find(Auth::user()->id);
        $edit_information->name = $request->name;
        $edit_information->company_name = $request->company_name;
        $edit_information->city = $request->city;
        $edit_information->state = $request->state;
        $edit_information->address = $request->address;
        $edit_information->save();
        return redirect(url('/recruiter/dashboard'));


    }

    public function createVideos(Request $request)
    {
       $obj = new \App\Modules\User\Models\UserVideo();
       $url = explode("https://youtu.be/",$request->video_url);
       $obj->user_id = Auth::user()->id;
       $obj->title = $request->video_title;
       $obj->video_url =$url[1] ;
       $obj->save();

       /* profile percent code here
        * $check_count = UserVideo::where('user_id',Auth::user()->id)->count();
       if($check_count <= 1)
       {
           $current_percentage = Auth::user()->profile_completed;
           $increase_percentage = $current_percentage + 10;
           Auth::user()->profile_completed = $increase_percentage;
           Auth::user()->save();
       }*/



       
       return redirect(url('dashboard'));
    }
    
    public function createPhotos(Request $request)
    {
                $extension = $request->file('photo')->getClientOriginalExtension();
                $new_file_name = str_replace(".", "-", microtime(true)) . "." . $extension;
                Storage::put('public/user_photos/' . $new_file_name, file_get_contents($request->file('photo')->getRealPath()));
               
          
       $obj = new \App\Modules\User\Models\UserPhoto();
       $obj->user_id = Auth::user()->id;
        $obj->photo = $new_file_name;
       $obj->save();

        /*profile percent code here*/
       /*$check_count = UserPhoto::where('user_id',Auth::user()->id)->count();
        if($check_count <= 1)
        {
            $current_percentage = Auth::user()->profile_completed;
            $increase_percentage = $current_percentage + 10;
            Auth::user()->profile_completed = $increase_percentage;
            Auth::user()->save();
        }*/

       
       return redirect(url('dashboard'));
    }
    public function updateRecruiterProfilePic(Request $request)
    {
        $extension = $request->file('recruiter_photo')->getClientOriginalExtension();
        $new_file_name = str_replace(".", "-", microtime(true)) . "." . $extension;
        Storage::put('public/recruiter_profile/' . $new_file_name, file_get_contents($request->file('recruiter_photo')->getRealPath()));
        Auth::user()->profile_img = $new_file_name;

        /*profile percent code here
        $current_percentage = Auth::user()->profile_completed;
        $increase_percentage = $current_percentage + 10;
        Auth::user()->profile_completed = $increase_percentage;*/

       Auth::user()->save();



       
       return redirect(url('/recruiter/dashboard'));
    }
    
    public function updateAboutMe(Request $request)
    {
       /* profile percent code here
        if(Auth::user()->about_me == '')
        {
            $current_percentage = Auth::user()->profile_completed;
            $increase_percentage = $current_percentage + 10;
            Auth::user()->profile_completed = $increase_percentage;
        }*/
       Auth::user()->name = $request->name;
       Auth::user()->city = $request->city;
       Auth::user()->language = implode(',', $request->language);       
       Auth::user()->about_me = $request->about_me;
       Auth::user()->facebook = $request->facebook;
       Auth::user()->twitter = $request->twitter;
       Auth::user()->instagram = $request->instagram;
       Auth::user()->save();
       return redirect(url('dashboard'));
    }
    
    public function updateWorkPreference(Request $request)
    {
       /* profile percent code here
        if(Auth::user()->work_preference == '' && Auth::user()->location_preference == '' )
        {
            $current_percentage = Auth::user()->profile_completed;
            $increase_percentage = $current_percentage + 10;
            Auth::user()->profile_completed = $increase_percentage;
        }*/
       Auth::user()->work_preference = $request->work_preference;
       Auth::user()->location_preference = $request->location_preference;
       Auth::user()->save();
       return redirect(url('dashboard'));
    }
    
    public function createEducation(Request $request)
    {
 
      $obj = new \App\Modules\User\Models\Education();
      $obj->education_name = $request->education_name;
      $obj->institute = $request->institute;
      $obj->from = $request->from;
      $obj->to = $request->to;
      $obj->user_id = Auth::user()->id;
      $obj->save();

       /* profile percent code here
      $check_count = Education::where('user_id',Auth::user()->id)->count();
        if($check_count <= 1)
        {
            $current_percentage = Auth::user()->profile_completed;
            $increase_percentage = $current_percentage + 10;
            Auth::user()->profile_completed = $increase_percentage;
            Auth::user()->save();
        }*/


       return redirect(url('dashboard'));
    }
    
    public function createExperience(Request $request)
    {
 
      $obj = new \App\Modules\User\Models\Experience();
      $obj->title = $request->title;
      $obj->about_your_work = $request->about_work;
      $obj->user_id = Auth::user()->id;
      $obj->save();

        /*profile percent code here
      $check_count = Experience::where('user_id',Auth::user()->id)->count();
        if($check_count <= 1)
        {
            $current_percentage = Auth::user()->profile_completed;
            if(Auth::user()->user_type == 4)
            {
                $increase_percentage = $current_percentage + 15;
            }
            elseif(Auth::user()->user_type == 12 || Auth::user()->user_type == 13 )
            {
                $increase_percentage = $current_percentage + 15;
            }
            else
            {
                $increase_percentage = $current_percentage + 30;
            }
            Auth::user()->profile_completed = $increase_percentage;
            Auth::user()->save();
        }*/


       return redirect(url('dashboard'));
    }
    public function createPhysics(Request $request)
    {
 
        $obj = \App\Modules\User\Models\Physics::where('user_id',Auth::user()->id)->first();
        if($obj)
        {
      
      $obj->height = $request->height;
      $obj->weight = $request->weight;
      $obj->bust = $request->bust;
      $obj->waist = $request->waist;
      $obj->hips = $request->hips;
      $obj->chest = $request->chest;
      $obj->biceps = $request->biceps;
      $obj->hair_type = $request->hair_type;
      $obj->hair_length = $request->hair_length;
      $obj->complexion = $request->complexion;
      $obj->user_id = Auth::user()->id;

      $obj->save();
        }else{
        $obj = new \App\Modules\User\Models\Physics();
      $obj->height = $request->height;
      $obj->weight = $request->weight;
      $obj->bust = $request->bust;
      $obj->waist = $request->waist;
      $obj->hips = $request->hips;
      $obj->chest = $request->chest;
      $obj->biceps = $request->biceps;
      $obj->hair_type = $request->hair_type;
      $obj->hair_length = $request->hair_length;
      $obj->complexion = $request->complexion;
      $obj->user_id = Auth::user()->id;

      $obj->save();

           /* profile percent code here
            $current_percentage = Auth::user()->profile_completed;
            $increase_percentage = $current_percentage + 15;
            Auth::user()->profile_completed = $increase_percentage;
            Auth::user()->save();*/
        }
       return redirect(url('dashboard'));
    }
    public function createDocument(Request $request)
    {
                $extension = $request->file('document')->getClientOriginalExtension();
                $new_file_name = str_replace(".", "-", microtime(true)) . "." . $extension;
                Storage::put('public/user_documents/' . $new_file_name, file_get_contents($request->file('document')->getRealPath()));
       $obj = new \App\Modules\User\Models\UserDocument();
       $obj->user_id = Auth::user()->id;
        $obj->file_name = $new_file_name;
       $obj->title = $request->title;
       $obj->save();

        /*profile percent code here
       $check_count = UserDocument::where('user_id',Auth::user()->id)->count();
        if($check_count <= 1)
        {
            $current_percentage = Auth::user()->profile_completed;
            $increase_percentage = $current_percentage + 5;
            Auth::user()->profile_completed = $increase_percentage;
            Auth::user()->save();
        }*/
       
       return redirect(url('dashboard'));
    }

    public function createWritingType(Request $request)
    {
        $check_data = WritingType::where('user_id',Auth::user()->id)->first();
        if(isset($request->writing_type))
        {
            if (isset($check_data))
            {
                $check_data->writing_type = implode(',', $request->writing_type);
                $check_data->save();
            }
            else
            {
                $writing_type = new WritingType();
                $writing_type->user_id = Auth::user()->id;
                $writing_type->writing_type = implode(',', $request->writing_type);
                $writing_type->save();

               /* profile percent code here
                $current_percentage = Auth::user()->profile_completed;
                $increase_percentage = $current_percentage + 5;
                Auth::user()->profile_completed = $increase_percentage;
                Auth::user()->save();*/
            }
        }
        else
        {
            if (isset($check_data))
            {
                $check_data->delete();

                /*profile percent code here
                $current_percentage = Auth::user()->profile_completed;
                $increase_percentage = $current_percentage - 5;
                Auth::user()->profile_completed = $increase_percentage;
                Auth::user()->save();*/
            }
        }
        return redirect(url('dashboard'));

    }

    public function createGenre(Request $request)
    {
        $check_genre = Genre::where('user_id',Auth::user()->id)->first();
        if(isset($request->genre))
        {
            if(isset($check_genre))
            {
                $check_genre->genre = implode(',', $request->genre);
                $check_genre->save();
            }
            else
            {
                $genre = new Genre();
                $genre->user_id = Auth::user()->id;
                $genre->genre = implode(',', $request->genre);
                $genre->save();

                /*profile percent code here
                $current_percentage = Auth::user()->profile_completed;
                $increase_percentage = $current_percentage + 5;
                Auth::user()->profile_completed = $increase_percentage;
                Auth::user()->save();*/
            }
        }
        else
        {
            if(isset($check_genre))
            {
                $check_genre->delete();

                /*profile percent code here
                $current_percentage = Auth::user()->profile_completed;
                $increase_percentage = $current_percentage - 5;
                Auth::user()->profile_completed = $increase_percentage;
                Auth::user()->save();*/
            }
        }

        return redirect(url('dashboard'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function listRecruiter()
    {
        return view('Recruiter::list');
    }
    
     public function listArtistOfTheDay($user_type)
    {
        return view('User::list-artist-of-the-day');
    }

    public function data()
    {


        $users = User::where('user_type','3')->orderBy('id','desc')->get();
        return Datatables::of($users)
            /*->addColumn('status', function($user) {
                if($user->user_status == 1)
                {
                    return '<label class="label label-success">Active</label>';
                }
                else
                {
                    return '<label class="label label-danger">Inactive</label>';
                }
            })*/
            ->rawColumns(['status'])
            ->make(true);
    }
    
    public function artistOfTheDaydata($user_type)
    {   
        
        
        $users = User::where('user_type',$user_type)->orderBy('id','desc')->get();
        
        
        return Datatables::of($users)
            ->addColumn('name', function($artist) {
                    return $artist->name;
            })
            ->addColumn('artist_of_the_day', function($artist) {
                if(isset($artist->artistOfTheDay))
                {
                    return '1';
                }else{
                    return '0';
                }
                    
            })
            ->make(true);
    }
    
    public function setArtistOfTheDay(Request $request, $type)
    {

        $check_availibility = ArtistOfTheDay::where('user_type',$type)->delete();
        //\App\Modules\User\Models\ArtistOfTheDay::truncate();
        foreach($request->artist as $obj)
        {
            $artist =  new \App\Modules\User\Models\ArtistOfTheDay();
            $artist->user_id = $obj;
            $artist->user_type = $type;
            $artist->save();
        }
        
        return redirect('admin/user/manage/artist-of-the-day/'.$type)->with('success','Artist Of The Day set successfully!');
    }

    public function create(Request $request)
    {
        if($request->method()=="GET")
        {
            return view('Recruiter::create');
        }
        else
        {
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'name' => 'required',
                'mobile' => 'required',
                'password' => 'required|min:6|confirmed',
                'city' => 'required',
                'company_name' => 'required',

            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $user =  new User();
            $user->email = $request->email;
            $user->name = $request->name;
            $user->mobile = $request->mobile;
            $user->password = bcrypt($request->password);
            $user->city = $request->city;
            $user->company_name = $request->company_name;
            $user->user_status = $request->status;
            $user->user_type = $request->user_type;
            $user->login_as = 'recruiter';
            $user->save();
            return redirect('/admin/recruiter/list')->with('success','Recruiter Added Successfully!');
        }
    }

    public function update(Request $request,$id)
    {
        $user = User::find($id);
        if($request->method()=="GET")
        {
            
            return view('Recruiter::update',['user'=>$user]);
        }
        else
        {
            $validator = Validator::make($request->all(), [
                //'email' => 'required',
                'name' => 'required',
                //'mobile' => 'required',
                //'password' => 'confirmed',
                'city' => 'required',
                'company_name' => 'required',

            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            if($request->email != '')
            {
                $user->email = $request->email;
            }
            if($request->password != '')
            {
                $user->password = bcrypt($request->password);
            }
            if($request->mobile != '')
            {
                $user->mobile = $request->mobile;
            }

            $user->name = $request->name;
            $user->city = $request->city;
            $user->company_name = $request->company_name;

            $user->user_status = $request->status;
            $user->login_as = 'recruiter';

            $user->save();
            return redirect('/admin/recruiter/list')->with('success','Recruiter Updated Successfully!');
        }
    }

    public function checkMobileNumber(Request $request)
    {
        $mobile = $request->mobile;


        if ($mobile) {
            $user_info = User::where('mobile', $mobile)->where('user_type','3')->where('id','<>',$request->id)->first();


            if ($user_info) {
                return "false";
            } else {
                return "true";
            }
        }
    }

    public function delete($id)
    {
        
        $delete_user = User::find($id);
        $delete_user->delete();
        
        return redirect('/admin/recruiter/list')->with('success','Recruiter Delete Successfully!');
    }

    public function changeStatus($id)
    {

        $check_status = User::find($id);
        $user_type = $check_status->user_type;
        if($check_status->user_status == '0')
        {
            $check_status->user_status = '1';
            $check_status->save();
            return redirect('/admin/recruiter/list')->with('success','Status Changed Successfully!');
        }
        else
        {
            $check_status->user_status = '0';
            $check_status->save();
            return redirect('/admin/recruiter/list')->with('success','Status Changed Successfully!');
        }



    }

    public function recruiterLoginByAdmin($id)
    {
        $id = base64_decode($id);
        Auth::logout();
        Auth::loginUsingId($id);
        return redirect('/recruiter/dashboard');

    }

    public function contactAdmin(Request $request)
    {

        $artist_contact_request = new ArtistRequest();
        $artist_contact_request->user_id = Auth::user()->id;
        $artist_contact_request->artist_category = $request->artist_category;
        $artist_contact_request->artist_name = $request->artist_name;
        $artist_contact_request->artist_email = $request->artist_email;
        $artist_contact_request->artist_city = $request->artist_city;
        $artist_contact_request->artist_mobile_no = $request->artist_mobile_no;
        $artist_contact_request->artist_requirement = $request->artist_requirement;
        $artist_contact_request->save();
        $site_title = \App\Modules\Models\GlobalValue::where('slug','site-title')->first();
        $site_email = \App\Modules\Models\GlobalValue::where('slug','site-email')->first();

        //$data['USER_NAME'] = $request->name;
        $data['SITE_TITLE'] = $site_title->value;
        $data['SITE_EMAIL'] = $site_email->value;

        $email_template = \App\Modules\Emailtemplate\Models\EmailTemplate::where('template_key','contact-us-thanks')->first();
        Mail::send('Emailtemplate::contact-us-thanks',$data, function($message) use ($site_email,$site_title,$request,$email_template) {
            $message->to($request->artist_email)->subject($email_template->subject)->from($site_email->value,$site_title->value);
        });
        return redirect(url('dashboard'))->with('success','Request Submitted Successfully!');
    }

    public function requestForRecruiterAccount(Request $request)
    {

        Auth::user()->applied_for_recruiter_account = 'Applied/Pending';
        Auth::user()->save();
        $add_request = new ArtistRequestForRecruiterAccount();
        $add_request->artist_id = Auth::user()->id;
        $add_request->artist_name = Auth::user()->name;
        $add_request->artist_mobile_no = Auth::user()->mobile;
        $add_request->artist_email = Auth::user()->email;
        if($add_request->save())
        {
            return redirect(url('dashboard'))->with('success','Request Submitted Successfully!');
        }



    }
}
