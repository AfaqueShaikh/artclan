<?php

namespace App\Modules\State\Controllers;

use App\Helper\fileUploadHelper;
use App\Http\Controllers\Controller;
use App\Modules\Country\Models\Country;
use App\Modules\State\Models\State;
use Illuminate\Http\Request;
use Auth;
use Mail;
use Validator;
use DataTables;
use Image;

class StateController extends Controller
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
     * Show the application dashState::
     *
     * @return \Illuminate\Http\Response
     */
    public function listState()
    {
        return view('State::list');
    }

    public function data()
    {
        $states = State::orderBy('id','DESC')->get();

        foreach ($states as $state)
        {
            $state->country_name = $state->country->name;
        }
        return Datatables::of($states)
//            ->addColumn('image', function($state) {
//                return '<label>jhgjg</label>';
//            })
            ->make(true);
    }

    public function create(Request $request)
    {
        if($request->isMethod("GET"))
        {
            $countries = Country::all();
            return view('State::create',['countries'=>$countries]);
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
            $state =  new State();
            $state->country_id = $request->country;
            $state->name = $request->name;

//            if ($request->hasFile('image')) {
//
//                $image = fileUploadHelper::fileUpload(['file_type'=>'image','html_input_name'=>'image','file'=>$request->image,
//                    'destination'=>'/storage/app/public/state','resize'=>['resize'=>true,'height'=>100,'width'=>100,'resize_destination'=>'/storage/app/public/state/thumb']]);
//
//                if(isset($image['error_code']) && $image['error_code'])
//                {
//                    dd($image);
//                }
//                else
//                {
//                    $state->link = '/storage/app/public/state/';
//                    $state->image = $image[0];
//                }
//
//            }

            $state->save();
            return redirect('admin/state/list')->with('success','State Added Successfully!');
        }
    }

    public function update(Request $request,$id)
    {
        $state = State::find($id);
        if($request->method()=="GET")
        {
            $countries = Country::all();
            return view('State::update',['state'=>$state,'countries'=>$countries]);
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
            $state->name = $request->name;
            $state->country_id = $request->country;
            $state->save();
            return redirect('admin/state/list')->with('success','State Updated Successfully!');
        }
    }

    public function delete($id)
    {
        State::find($id)->delete();
        return redirect('admin/state/list')->with('success','State Delete Successfully!');
    }


}
