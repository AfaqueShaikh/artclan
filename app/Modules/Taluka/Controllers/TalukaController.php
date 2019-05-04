<?php

namespace App\Modules\Taluka\Controllers;

use App\Helper\fileUploadHelper;
use App\Http\Controllers\Controller;
use App\Modules\Country\Models\Country;
use App\Modules\District\Models\District;
use App\Modules\State\Models\State;
use App\Modules\Taluka\Models\Taluka;
use Illuminate\Http\Request;
use Auth;
use Mail;
use Validator;
use DataTables;
use Image;

class TalukaController extends Controller
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
     * Show the application dashTaluka::
     *
     * @return \Illuminate\Http\Response
     */
    public function listTaluka()
    {
        return view('Taluka::list');
    }

    public function data()
    {
        $talukas = Taluka::orderBy('id','desc')->get();

        foreach ($talukas as $taluka)
        {
            $taluka->country_name = $taluka->district->state->country->name;
            $taluka->state_name = $taluka->district->state->name;
            $taluka->district_name = $taluka->district->name;
        }
        return Datatables::of($talukas)
            ->make(true);
    }

    public function create(Request $request)
    {
        if($request->isMethod("GET"))
        {
            $countries = Country::all();
            return view('Taluka::create',['countries'=>$countries]);
        }
        else
        {

            $validator = Validator::make($request->all(), [
                'name' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $taluka =  new Taluka();
            $taluka->district_id = $request->district;
            $taluka->name = $request->name;

            $taluka->save();
            return redirect('admin/taluka/list')->with('success','Taluka Added Successfully!');
        }
    }

    public function update(Request $request,$id)
    {
        $taluka = Taluka::find($id);
        if($request->method()=="GET")
        {
            $countries = Country::all();
            return view('Taluka::update',['taluka'=>$taluka,'countries'=>$countries]);
        }
        else
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $taluka->name = $request->name;
            $taluka->district_id = $request->district;
            $taluka->save();
            return redirect('admin/taluka/list')->with('success','Taluka Updated Successfully!');
        }
    }

    public function delete($id)
    {
        Taluka::find($id)->delete();
        return redirect('admin/taluka/list')->with('success','Taluka Delete Successfully!');
    }

    public function getState(Request $request)
    {
        return State::where('country_id',$request->country)->get();
    }

    public function getDistrict(Request $request)
    {
        return District::where('state_id',$request->state)->get();
    }

}
