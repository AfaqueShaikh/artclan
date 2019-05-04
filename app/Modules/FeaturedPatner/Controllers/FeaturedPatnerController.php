<?php

namespace App\Modules\FeaturedPatner\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\FeaturedPatner\Models\FeaturedPatner;
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

class FeaturedPatnerController extends Controller
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
    public function listFeaturedPatner()
    {

        return view('FeaturedPatner::list');
    }

    public function data()
    {
        $featured_partner_data = FeaturedPatner::all();
        //dd($banner_images);
        

        return Datatables::of($featured_partner_data)
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
            return view('FeaturedPatner::create');
        }
        else {
           
           
                $validator = Validator::make($request->all(), [
                    'image' => 'required',
                    'name' => 'required',
                    'url' => 'required',
                    'description' => 'required',

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
                    Storage::put('public/featured_partners/' . $new_file_name, file_get_contents($request->file('image')->getRealPath()));
                    if (!is_dir(storage_path('app/public/featured_partners/thumbnails/'))) {
                        Storage::makeDirectory('public/featured_partners/thumbnails/');
                    }
                    // make thumbnail
                    $thumbnail = Image::make(storage_path('app/public/featured_partners/' . $new_file_name));
                    $thumbnail->resize($this->thumbnail_size["width"], $this->thumbnail_size["height"]);
                    $thumbnail->save(storage_path('app/public/featured_partners/thumbnails/' . $new_file_name));
                    $insert = new FeaturedPatner();
                    $insert->image = $new_file_name;
                    $insert->url = $request->url;
                    $insert->name = $request->name;
                    $insert->description = $request->description;
                    $insert->save();
                    return redirect('/admin/featured-patner/list')->with('success', 'Featured Partner Added Successfully!');
                    
                }
                else
                {
                    return redirect('/admin/featured-patner/list')->with('error', 'Something Went Wrong!');
                }
                
                
            }

    }

    public function update(Request $request,$id)
    {
        $featured_patner_data = FeaturedPatner::find($id);
        if($request->method()=="GET")
        {
            return view('FeaturedPatner::update',['featured_patner_data'=>$featured_patner_data]);
        }
        else
        {
            $validator = Validator::make($request->all(), [
                //'image' => 'required',
                'url' => 'required',
                'name' => 'required',
                'description' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            if ($request->hasFile('image')) {
                $delete_image = $featured_patner_data->image;
                    $this->removeImageFromStrorage($delete_image);
                    $extension = $request->file('image')->getClientOriginalExtension();
                    $new_file_name = str_replace(".", "-", microtime(true)) . "." . $extension;
                    Storage::put('public/featured_partners/' . $new_file_name, file_get_contents($request->file('image')->getRealPath()));
                    if (!is_dir(storage_path('app/public/featured_partners/thumbnails/'))) {
                        Storage::makeDirectory('public/featured_partners/thumbnails/');
                    }
                    // make thumbnail
                    $thumbnail = Image::make(storage_path('app/public/featured_partners/' . $new_file_name));
                    $thumbnail->resize($this->thumbnail_size["width"], $this->thumbnail_size["height"]);
                    $thumbnail->save(storage_path('app/public/featured_partners/thumbnails/' . $new_file_name));
                    
                    $featured_patner_data->image = $new_file_name;
                }
                $featured_patner_data->name = $request->name;
                $featured_patner_data->url = $request->url;
                $featured_patner_data->description = $request->description;
                $featured_patner_data->save();
                return redirect('/admin/featured-patner/list')->with('success', 'Featured Partner Updated Successfully!');
                
            
        }
    }

    public function delete($id)
    {
        $reatured_partner_data = FeaturedPatner::find($id);
        $delete_image = $reatured_partner_data->image;
        $this->removeImageFromStrorage($delete_image);
        $reatured_partner_data->delete();
        return redirect('/admin/featured-patner/list')->with('success','Featured Partner Deleted Successfully!');
    }

     private function removeImageFromStrorage($file_name) {
        if (Storage::exists('public/featured_partners/' . $file_name)) {
            Storage::delete('public/featured_partners/' . $file_name);

            if (Storage::exists('public/featured_partners/thumbnails/' . $file_name)) {
                Storage::delete('public/featured_partners/thumbnails/' . $file_name);
            }

            return true;
        }

        return false;
    }
}
