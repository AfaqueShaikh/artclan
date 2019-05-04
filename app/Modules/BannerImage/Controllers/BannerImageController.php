<?php

namespace App\Modules\BannerImage\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\BannerImage\Models\BannerImage;
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

class BannerImageController extends Controller
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
    public function listBannerImage()
    {

        return view('BannerImage::list');
    }

    public function data()
    {
        $banner_images = BannerImage::all();
        //dd($banner_images);
        

        return Datatables::of($banner_images)
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
            return view('BannerImage::create');
        }
        else {
           
            /*$image = Image::make($request->csv[0]->getRealPath());
            $image_two = Image::make($request->csv[0]->getRealPath());

            $image->crop(150,150,30,30);
            $image->save(base_path().'/public/image/test.jpg');

            $image_two->crop(150,150,180,30);
            $image_two->save(base_path().'/public/image/test1.jpg');
            dd('done');*/
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
                    'banner_image' => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                }

                $data = [];
                if ($request->hasFile('banner_image')) {
                    $extension = $request->file('banner_image')->getClientOriginalExtension();
                    $new_file_name = str_replace(".", "-", microtime(true)) . "." . $extension;
                    Storage::put('public/banner_images/' . $new_file_name, file_get_contents($request->file('banner_image')->getRealPath()));
                    if (!is_dir(storage_path('app/public/banner_images/thumbnails/'))) {
                        Storage::makeDirectory('public/banner_images/thumbnails/');
                    }
                    // make thumbnail
                    $thumbnail = Image::make(storage_path('app/public/banner_images/' . $new_file_name));
                    $thumbnail->resize($this->thumbnail_size["width"], $this->thumbnail_size["height"]);
                    $thumbnail->save(storage_path('app/public/banner_images/thumbnails/' . $new_file_name));
                    $insert_image = new BannerImage();
                    $insert_image->banner_image = $new_file_name;
                    $insert_image->save();
                    return redirect('/admin/banner/list')->with('success', 'Banner Image Added Successfully!');
                    
                }
                else
                {
                    return redirect('/admin/banner/list')->with('error', 'Something Went Wrong!');
                }
                
                
            }

    }

    public function update(Request $request,$id)
    {
        $banner_image = BannerImage::find($id);
        if($request->method()=="GET")
        {
            return view('BannerImage::update',['banner_image'=>$banner_image]);
        }
        else
        {
            $validator = Validator::make($request->all(), [
                'banner_image' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            if ($request->hasFile('banner_image')) {
                $delete_image = $banner_image->banner_image;
                    $this->removeBannerImageFromStrorage($delete_image);
                    $extension = $request->file('banner_image')->getClientOriginalExtension();
                    $new_file_name = str_replace(".", "-", microtime(true)) . "." . $extension;
                    Storage::put('public/banner_images/' . $new_file_name, file_get_contents($request->file('banner_image')->getRealPath()));
                    if (!is_dir(storage_path('app/public/banner_images/thumbnails/'))) {
                        Storage::makeDirectory('public/banner_images/thumbnails/');
                    }
                    // make thumbnail
                    $thumbnail = Image::make(storage_path('app/public/banner_images/' . $new_file_name));
                    $thumbnail->resize($this->thumbnail_size["width"], $this->thumbnail_size["height"]);
                    $thumbnail->save(storage_path('app/public/banner_images/thumbnails/' . $new_file_name));
                    
                    $banner_image->banner_image = $new_file_name;
                    $banner_image->save();
                    return redirect('/admin/banner/list')->with('success', 'Banner Image Updated Successfully!');
                    
                }
                else
                {
                    return redirect('/admin/banner/list')->with('error', 'Something Went Wrong!');
                }
            
        }
    }

    public function delete($id)
    {
        $banner_image = BannerImage::find($id);
        $delete_image = $banner_image->banner_image;
        $this->removeBannerImageFromStrorage($delete_image);
        $banner_image->delete();
        return redirect('/admin/banner/list')->with('success','Country Delete Successfully!');
    }

     private function removeBannerImageFromStrorage($file_name) {
        if (Storage::exists('public/banner_images/' . $file_name)) {
            Storage::delete('public/banner_images/' . $file_name);

            if (Storage::exists('public/banner_images/thumbnails/' . $file_name)) {
                Storage::delete('public/banner_images/thumbnails/' . $file_name);
            }

            return true;
        }

        return false;
    }
}
