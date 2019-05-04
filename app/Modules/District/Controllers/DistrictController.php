<?php

namespace App\Modules\District\Controllers;

use App\Helper\fileUploadHelper;
use App\Http\Controllers\Controller;
use App\Modules\Country\Models\Country;
use App\Modules\State\Models\State;
use App\Modules\District\Models\District;
use Illuminate\Http\Request;
use Auth;
use Mail;
use Validator;
use DataTables;
use Image;

class DistrictController extends Controller
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
     * Show the application dashDistrict::
     *
     * @return \Illuminate\Http\Response
     */
    public function listDistrict()
    {
        return view('District::list');
    }

    public function data()
    {
        $districts = District::orderBy('id','desc')->get();

        foreach ($districts as $district)
        {
            $district->country_name = $district->state->country->name;
            $district->state_name = $district->state->name;
        }
        return Datatables::of($districts)
//            ->addColumn('image', function($district) {
//                return '<label>jhgjg</label>';
//            })
            ->make(true);
    }

    public function create(Request $request)
    {
        if($request->isMethod("GET"))
        {
            $countries = Country::all();
            return view('District::create',['countries'=>$countries]);
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
            $district =  new District();
            $district->state_id = $request->state;
            $district->name = $request->name;

            $district->save();
            return redirect('admin/district/list')->with('success','District Added Successfully!');
        }
    }

    public function update(Request $request,$id)
    {
        $district = District::find($id);
        if($request->method()=="GET")
        {
            $countries = Country::all();
            return view('District::update',['district'=>$district,'countries'=>$countries]);
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
            $district->name = $request->name;
            $district->state_id = $request->state;
            $district->save();
            return redirect('admin/district/list')->with('success','District Updated Successfully!');
        }
    }

    public function delete($id)
    {
        District::find($id)->delete();
        return redirect('admin/district/list')->with('success','District Delete Successfully!');
    }

    public function getState(Request $request)
    {
        $states = State::where('country_id',$request->country)->get();
        return $states;
    }
}
