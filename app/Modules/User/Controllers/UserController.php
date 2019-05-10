<?php

namespace App\Modules\User\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Mail;
use Validator;
use DataTables;
use Image;
use Storage;


class UserController extends Controller
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
    public function dashboard()
    {
         Auth::loginUsingId(13);
         
        $userData = Auth::user();
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
        
        
        
        $cities = \App\Modules\District\Models\District::all();
        
        
        return view('User::artist-dashboard',['userData'=>$userData, 'user_types'=>$user_types, 'cities'=>$cities]);
    }
    
    /**
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function createVideos(Request $request)
    {
       $obj = new \App\Modules\User\Models\UserVideo();
       $obj->user_id = Auth::user()->id;
       $obj->title = $request->video_title;
       $obj->video_url = $request->video_url;
       $obj->save();
       
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
       
       return redirect(url('dashboard'));
    }
    public function updateProfilePicture(Request $request)
    {
        
       
                $extension = $request->file('photo')->getClientOriginalExtension();
                $new_file_name = str_replace(".", "-", microtime(true)) . "." . $extension;
                Storage::put('public/user_profile/' . $new_file_name, file_get_contents($request->file('photo')->getRealPath()));
               
          
       
       Auth::user()->profile_img = $new_file_name;
       Auth::user()->save();

       
       return redirect(url('dashboard'));
    }
    
    public function updateAboutMe(Request $request)
    {
       Auth::user()->name = $request->name;
       Auth::user()->city = $request->city;
       Auth::user()->language = implode(',', $request->language);       
       Auth::user()->about_me = $request->about_me;
       Auth::user()->save();
       return redirect(url('dashboard'));
    }
    
    public function updateWorkPreference(Request $request)
    {
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
       return redirect(url('dashboard'));
    }
    
    public function createExperience(Request $request)
    {
 
      $obj = new \App\Modules\User\Models\Experience();
      $obj->title = $request->title;
      $obj->about_your_work = $request->about_work;
      $obj->user_id = Auth::user()->id;

      $obj->save();
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
       
       return redirect(url('dashboard'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function listUser()
    {
        return view('User::list');
    }
    
     public function listArtistOfTheDay($user_type)
    {
        return view('User::list-artist-of-the-day');
    }

    public function data($user_type)
    {   
        $users = User::where('user_type',$user_type)->orderBy('id','desc')->get();
        return Datatables::of($users)
            ->addColumn('status', function($user) {
                if($user->user_status == 1)
                {
                    return '<label class="label label-success">Active</label>';
                }
                else
                {
                    return '<label class="label label-danger">Inactive</label>';
                }
            })
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
        
        \App\Modules\User\Models\ArtistOfTheDay::truncate();
        
        
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
            return view('User::create');
        }
        else
        {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:users',
                'name' => 'required',
                'mobile' => 'required|numeric|min:10|unique:users',
                'password' => 'required|min:6|confirmed',
                'city' => 'required',
                'state' => 'required',
                'address' => 'required',
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
            $user->state = $request->state;
            $user->address = $request->address;
            $user->user_status = $request->status;
            $user->user_type = $request->user_type;

            $user->save();
            return redirect('admin/user/list/'.$request->user_type)->with('success','User Added Successfully!');
        }
    }

    public function update(Request $request,$id)
    {
        $user = User::find($id);
        if($request->method()=="GET")
        {
            
            return view('User::update',['user'=>$user]);
        }
        else
        {
            $validator = Validator::make($request->all(), [
                'email' => 'unique:users',
                'name' => 'required',
                'mobile' => 'unique:users',
                'password' => 'confirmed',
                'city' => 'required',
                'state' => 'required',
                'address' => 'required',
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
                $user->password = $request->password;
            }
            if($request->mobile != '')
            {
                $user->mobile = $request->mobile;
            }

            $user->name = $request->name;
            $user->city = $request->city;
            $user->state = $request->state;
            $user->address = $request->address;
            $user->user_status = $request->status;

            $user->save();
            return redirect('admin/user/list/'.$request->user_type)->with('success','User Updated Successfully!');
        }
    }

    public function delete($id)
    {
        
        $delete_user = User::find($id);
        
        $user_type = $delete_user->user_type;
        $delete_user->delete();
        
        return redirect('admin/user/list/'.$user_type)->with('success','User Delete Successfully!');
    }
}
