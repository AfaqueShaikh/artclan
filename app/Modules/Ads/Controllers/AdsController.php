<?php

namespace App\Modules\Ads\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Ads\Models\Ads;
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
use Storage;

class AdsController extends Controller
{
    private $thumbnail_size = array("width" => 50, "height" => 50);
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
    public function listAds()
    {
        

        return view('Ads::list');
    }

    public function data()
    {
        $ads_data = Ads::all();
        //dd($banner_images);
        

        return Datatables::of($ads_data)
           /*->addColumn('banner_image', function($image) {
            $url = asset("storage/app/public/banner_images/".$image->banner_image);
                 return '<img src='.$url.' border="0" width="100" class="img-rounded" align="center" />';
            })*/
            ->make(true);
    }

    public function create(Request $request)
    {
        if($request->method()=="GET")
        {
            return view('Ads::create');
        }
        else {
           
           
                $validator = Validator::make($request->all(), [
                    'image' => 'required',
                    'ads_url' => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                }

                $data = [];
                if ($request->hasFile('image')) {
                    $extension = $request->file('image')->getClientOriginalExtension();
                    $new_file_name = str_replace(".", "-", microtime(true)) . "." . $extension;
                    Storage::put('public/ads_images/' . $new_file_name, file_get_contents($request->file('image')->getRealPath()));
                    if (!is_dir(storage_path('app/public/ads_images/thumbnails/'))) {
                        Storage::makeDirectory('public/ads_images/thumbnails/');
                    }
                    // make thumbnail
                    $thumbnail = Image::make(storage_path('app/public/ads_images/' . $new_file_name));
                    $thumbnail->resize($this->thumbnail_size["width"], $this->thumbnail_size["height"]);
                    $thumbnail->save(storage_path('app/public/ads_images/thumbnails/' . $new_file_name));
                    $insert_ads = new Ads();
                    $insert_ads->image = $new_file_name;
                    $insert_ads->ads_url = $request->ads_url;
                    $insert_ads->save();
                    return redirect('/admin/ads/list')->with('success', 'Ads Added Successfully!');
                    
                }
                else
                {
                    return redirect('/admin/ads/list')->with('error', 'Something Went Wrong!');
                }
                
                
            }

    }

    public function update(Request $request,$id)
    {
        $ads_data = Ads::find($id);
        if($request->method()=="GET")
        {
            return view('Ads::update',['ads_data'=>$ads_data]);
        }
        else
        {
            $validator = Validator::make($request->all(), [
                //'image' => 'required',
                'ads_url' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            if ($request->hasFile('image')) {
                $delete_image = $ads_data->image;
                    $this->removeImageFromStrorage($delete_image);
                    $extension = $request->file('image')->getClientOriginalExtension();
                    $new_file_name = str_replace(".", "-", microtime(true)) . "." . $extension;
                    Storage::put('public/ads_images/' . $new_file_name, file_get_contents($request->file('image')->getRealPath()));
                    if (!is_dir(storage_path('app/public/ads_images/thumbnails/'))) {
                        Storage::makeDirectory('public/ads_images/thumbnails/');
                    }
                    // make thumbnail
                    $thumbnail = Image::make(storage_path('app/public/ads_images/' . $new_file_name));
                    $thumbnail->resize($this->thumbnail_size["width"], $this->thumbnail_size["height"]);
                    $thumbnail->save(storage_path('app/public/ads_images/thumbnails/' . $new_file_name));
                    
                    $ads_data->image = $new_file_name;
                }
                $ads_data->ads_url = $request->ads_url;
                $ads_data->save();
                return redirect('/admin/ads/list')->with('success', 'Ads Updated Successfully!');
                
            
        }
    }

    public function delete($id)
    {
        $ads_data = Ads::find($id);
        $delete_image = $ads_data->image;
        $this->removeImageFromStrorage($delete_image);
        $ads_data->delete();
        return redirect('/admin/ads/list')->with('success','Ads Delete Successfully!');
    }

     private function removeImageFromStrorage($file_name) {
        if (Storage::exists('public/ads_images/' . $file_name)) {
            Storage::delete('public/ads_images/' . $file_name);

            if (Storage::exists('public/ads_images/thumbnails/' . $file_name)) {
                Storage::delete('public/ads_images/thumbnails/' . $file_name);
            }

            return true;
        }

        return false;
    }
}
