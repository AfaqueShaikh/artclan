<?php

namespace App\Modules\Blog\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Blog\Models\Blog;
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

class BlogController extends Controller
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
    public function listBlog()
    {

        return view('Blog::list');
    }

    public function data()
    {
        $blog_data = Blog::all();

        return Datatables::of($blog_data)
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
            return view('Blog::create');
        }
        else {
           
           
                $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    'slug' => 'required',
                    'body' => 'required',

                ]);
                if ($validator->fails()) {
                    return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                }

                $data = [];
                ;
                    $insert = new Blog();
                    $insert->title = $request->title;
                    $insert->slug = $request->slug;
                    $insert->body = $request->body;
                    if($insert->save())
                    {
                        return redirect('/admin/blog/list')->with('success', 'Blog Added Successfully!');
                    }
                    else
                    {
                        return redirect('/admin/blog/list')->with('error', 'Something Went Wrong!');
                    }
                
                
            }

    }

    public function update(Request $request,$id)
    {
        $blog_data = Blog::find($id);
        if($request->method()=="GET")
        {
            return view('Blog::update',['blog_data'=>$blog_data]);
        }
        else
        {
            $validator = Validator::make($request->all(), [
                //'image' => 'required',
                
                'title' => 'required',
                'slug' => 'required',
                'body' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            
                $blog_data->title = $request->title;
                $blog_data->slug = $request->slug;
                $blog_data->body = $request->body;
                $blog_data->save();
                return redirect('/admin/blog/list')->with('success', 'Blog Updated Successfully!');
                
            
        }
    }

    public function delete($id)
    {
        blog::find($id)->delete();
        return redirect('/admin/blog/list')->with('success','Blog Deleted Successfully!');
    }

    
}
