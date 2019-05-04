<?php

namespace App\Modules\Testimonial\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Testimonial\Models\Testimonial;
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

class TestimonialController extends Controller
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
    public function listTestimonial()
    {

        return view('Testimonial::list');
    }

    public function data()
    {
        $testimonial_data = Testimonial::all();
        //dd($banner_images);
        

        return Datatables::of($testimonial_data)
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
            return view('Testimonial::create');
        }
        else {
           
           
                $validator = Validator::make($request->all(), [
                    'image' => 'required',
                    'name' => 'required',
                    
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
                    Storage::put('public/testimonial/' . $new_file_name, file_get_contents($request->file('image')->getRealPath()));
                    if (!is_dir(storage_path('app/public/testimonial/thumbnails/'))) {
                        Storage::makeDirectory('public/testimonial/thumbnails/');
                    }
                    // make thumbnail
                    $thumbnail = Image::make(storage_path('app/public/testimonial/' . $new_file_name));
                    $thumbnail->resize($this->thumbnail_size["width"], $this->thumbnail_size["height"]);
                    $thumbnail->save(storage_path('app/public/testimonial/thumbnails/' . $new_file_name));
                    $insert = new Testimonial();
                    $insert->image = $new_file_name;
                    $insert->name = $request->name;
                    $insert->description = $request->description;
                    $insert->save();
                    return redirect('/admin/testimonial/list')->with('success', 'Testimonial Added Successfully!');
                    
                }
                else
                {
                    return redirect('/admin/testimonial/list')->with('error', 'Something Went Wrong!');
                }
                
                
            }

    }

    public function update(Request $request,$id)
    {
        $testimonial_data = Testimonial::find($id);
        if($request->method()=="GET")
        {
            return view('Testimonial::update',['testimonial_data'=>$testimonial_data]);
        }
        else
        {
            $validator = Validator::make($request->all(), [
                //'image' => 'required',
                
                'name' => 'required',
                'description' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            if ($request->hasFile('image')) {
                $delete_image = $testimonial_data->image;
                    $this->removeImageFromStrorage($delete_image);
                    $extension = $request->file('image')->getClientOriginalExtension();
                    $new_file_name = str_replace(".", "-", microtime(true)) . "." . $extension;
                    Storage::put('public/testimonial/' . $new_file_name, file_get_contents($request->file('image')->getRealPath()));
                    if (!is_dir(storage_path('app/public/testimonial/thumbnails/'))) {
                        Storage::makeDirectory('public/testimonial/thumbnails/');
                    }
                    // make thumbnail
                    $thumbnail = Image::make(storage_path('app/public/testimonial/' . $new_file_name));
                    $thumbnail->resize($this->thumbnail_size["width"], $this->thumbnail_size["height"]);
                    $thumbnail->save(storage_path('app/public/testimonial/thumbnails/' . $new_file_name));
                    
                    $testimonial_data->image = $new_file_name;
                }
                $testimonial_data->name = $request->name;
                
                $testimonial_data->description = $request->description;
                $testimonial_data->save();
                return redirect('/admin/testimonial/list')->with('success', 'Testimonial Updated Successfully!');
                
            
        }
    }

    public function delete($id)
    {
        $testimonial_data = Testimonial::find($id);
        $delete_image = $testimonial_data->image;
        $this->removeImageFromStrorage($delete_image);
        $testimonial_data->delete();
        return redirect('/admin/testimonial/list')->with('success','Testimonial Deleted Successfully!');
    }

     private function removeImageFromStrorage($file_name) {
        if (Storage::exists('public/testimonial/' . $file_name)) {
            Storage::delete('public/testimonial/' . $file_name);

            if (Storage::exists('public/testimonial/thumbnails/' . $file_name)) {
                Storage::delete('public/testimonial/thumbnails/' . $file_name);
            }

            return true;
        }

        return false;
    }
}
