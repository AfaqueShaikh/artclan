<?php

namespace App\Modules\ArtistCategories\Controllers;

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

class CategoryController extends Controller
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
    public function listArtists()
    {
        return view('ArtistCategories::list-artists');
    }
    
    public function listCategoryList($type)
    {
        return view('ArtistCategories::list-artists-category');
    }

    public function data()
    {
        $artistsData = [];
        $artistsData[0] = ['name'=>'Writers', 'type'=>4];
        $artistsData[1] = ['name'=>'Painters', 'type'=>5];
        $artistsData[2] = ['name'=>'Singers', 'type'=>6];
        $artistsData[3] = ['name'=>'Dancers', 'type'=>7];
        $artistsData[4] = ['name'=>'Costume Designers', 'type'=>8];
        $artistsData[5] = ['name'=>'Makeup Artists', 'type'=>9];
        $artistsData[6] = ['name'=>'Photographers', 'type'=>10];
        $artistsData[7] = ['name'=>'Filmmakers', 'type'=>11];
        $artistsData[8] = ['name'=>'Actors', 'type'=>12];
        $artistsData[9] = ['name'=>'Fashion Models', 'type'=>13];
        
        return Datatables::of($artistsData)
            ->make(true);
    }
    
    public function dataCategory($type)
    {
        $artistCategoryData = \App\Modules\ArtistCategories\Models\ArtistCategory::where('artist_category_type', $type)->get();
        return Datatables::of($artistCategoryData)
            ->make(true);
    }

    public function create(Request $request, $type)
    {
        if($request->isMethod("GET"))
        {
            
            return view('ArtistCategories::create');
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
            
            $categoryData = new \App\Modules\ArtistCategories\Models\ArtistCategory();
            $categoryData->name = $request->name;
            $categoryData->artist_category_type = $type;
            $categoryData->save();
            
            return redirect('admin/artist/category/list/'.$type)->with('success','Category Added Successfully!');
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
