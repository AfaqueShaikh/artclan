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
