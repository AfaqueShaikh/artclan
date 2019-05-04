<?php

namespace App\Modules\Country\Controllers;

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

class CountryController extends Controller
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
    public function listCountry()
    {
        return view('Country::list');
    }

    public function data()
    {
        $countrys = Country::orderBy('id','desc')->get();

        return Datatables::of($countrys)
//            ->addColumn('total_bill', function($report) {
//                return $report->total_price + $report->total_discount;
//            })
            ->make(true);
    }

    public function create(Request $request)
    {
        if($request->method()=="GET")
        {
            return view('Country::create');
        }
        else {
            $image = Image::make($request->csv[0]->getRealPath());
            $image_two = Image::make($request->csv[0]->getRealPath());

            $image->crop(150,150,30,30);
            $image->save(base_path().'/public/image/test.jpg');

            $image_two->crop(150,150,180,30);
            $image_two->save(base_path().'/public/image/test1.jpg');
            dd('done');
            //dont delete. It will use at the time of csv upload
//            foreach ($request->csv as $csv_file) {
//                $path = $csv_file->getRealPath();
//                $all_data = array_map('str_getcsv', file($path));
//
//                foreach ($all_data as $index => $data) {
//                    if ($index > 0) {
//                        $state = State::where('name', $data[6])->first();
//                        if ($state == '') {
//                            $state = new State();
//                            $state->country_id = '1';
//                            $state->name = $data[6];
//                            $state->save();
//                        }
//
//                        $district = District::where('name', $data[5])->first();
//                        if ($district == '') {
//                            $district = new District();
//                            $district->state_id = $state->id;
//                            $district->name = $data[5] == '' || $data[5] == '.' ? 'N/A' : $data[5];
//                            $district->save();
//                        }
//
//                        $taluka = Taluka::where('name', $data[4])->first();
//                        if ($taluka == '') {
//                            $taluka = new Taluka();
//                            $taluka->district_id = $district->id;
//                            $taluka->name = $data[4] == '' || $data[4] == '.' ? 'N/A' : $data[4];
//                            $taluka->save();
//                        }
//                    }
//                }
//            }
                $validator = Validator::make($request->all(), [
                    'name' => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                }
                $country = new Country();
                $country->name = $request->name;
                $country->save();
                return redirect('admin/country/list')->with('success', 'Country Added Successfully!');
            }

    }

    public function update(Request $request,$id)
    {
        $country = Country::find($id);
        if($request->method()=="GET")
        {
            return view('Country::update',['country'=>$country]);
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
            $country->name=$request->name;
            $country->save();
            return redirect('admin/country/list')->with('success','Country Updated Successfully!');
        }
    }

    public function delete($id)
    {
        Country::find($id)->delete();
        return redirect('admin/country/list')->with('success','Country Delete Successfully!');
    }
}
