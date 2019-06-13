<?php

namespace App\Modules\PaymentDetail\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\PaymentDetail\Models\PaymentDetail;
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

class PaymentDetailController extends Controller
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
    public function listPayment()
    {
        return view('PaymentDetail::list');
    }

    public function data()
    {
        $user_types[1] = "Admin";
        $user_types[2] = "Sub Admin";
        $user_types[3] = "User";
        $user_types[4] = "Writer";
        $user_types[5] = "Painter";
        $user_types[6] = "Singer";
        $user_types[7] = "Dancer";
        $user_types[8] = "Costume Designer";
        $user_types[9] = "Makeup Artist";
        $user_types[10] = "Photographer";
        $user_types[11] = "Film Maker";
        $user_types[12] = "Actor";
        $user_types[13] = "Fashion Model";
        $payment_details = PaymentDetail::all();

        return Datatables::of($payment_details)
           ->addColumn('name', function($payment_detail) {

                 return $payment_detail->user->name;
            })
            ->addColumn('mobile', function($payment_detail) {

                return $payment_detail->user->mobile;
            })
            ->addColumn('user_type', function($payment_detail) use($user_types) {

                return $user_types[$payment_detail->user->user_type];
            })


            ->make(true);
    }

    /*public function create(Request $request)
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

    }*/

    /*public function update(Request $request,$id)
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
    }*/

    /*public function delete($id)
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
    }*/
}
