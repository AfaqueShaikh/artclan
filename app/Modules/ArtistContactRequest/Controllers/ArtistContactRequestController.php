<?php

namespace App\Modules\ArtistContactRequest\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ArtistContactRequest\Models\ArtistRequest;
use App\Modules\ContactUs\Models\EmailTemplate;
use App\Modules\ContactUs\Models\GlobalValue;
use DataTables;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Modules\ContactUs\Models\ContactUs;
use Validator;
use Image;
use Storage;
use Mail;

class ArtistContactRequestController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function listArtistContactRequest() {
        return view('ArtistContactRequest::list');
    }

    public function ArtistContactRequestData() {
        $user_types[1] = "admin";
        $user_types[2] = "sub_admin";
        $user_types[3] = "user";
        $user_types[4] = "writer";
        $user_types[5] = "painter";
        $user_types[6] = "singer";
        $user_types[7] = "dancer";
        $user_types[8] = "costume_designer";
        $user_types[9] = "makeup_artist";
        $user_types[10] = "Photographer";
        $user_types[11] = "Film Maker";
        $user_types[12] = "Actor";
        $user_types[13] = "Fashion Model";
        $artist_request = ArtistRequest::all();
        return Datatables::of($artist_request)
            ->addColumn('artist_category', function($artist_request) use($user_types) {
                return $user_types[$artist_request->artist_category];
            })

            ->addColumn('artist_requirement', function($artist_request)  {
                return strip_tags($artist_request->artist_requirement);
            })
            ->addColumn('status', function($artist_request) {
                return $artist_request->reply == '' ? '<label class="label label-danger">New, Not replied yet!</label>' : "<label class='label label-success'>Replied</label>";
            })

            ->rawColumns(['status','reply'])
            ->make(true);
    }





    public function updateArtistContactRequest(Request $request, $id) {
        $artist_request = ArtistRequest::find($id);
        if ($request->method() == "GET") {
            return view('ArtistContactRequest::edit', ['artist_request' => $artist_request]);
        } else {

            $validator = Validator::make($request->all(), [
                'value' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $artist_request->reply = $request->value;
            $artist_request->save();

            $site_title = \App\Modules\Models\GlobalValue::where('slug','site-title')->first();
            $site_email = \App\Modules\Models\GlobalValue::where('slug','site-email')->first();

            $data['MESSAGE'] = strip_tags($request->value);
            $data['SITE_TITLE'] = $site_title->value;
            $data['SITE_EMAIL'] = $site_email->value;
            $email_template =  \App\Modules\Emailtemplate\Models\EmailTemplate::where('template_key','contact-us-reply')->first();
            Mail::send('Emailtemplate::contact-us-reply',$data, function($message) use ($site_email,$site_title,$artist_request,$email_template) {
                $message->to($artist_request->artist_email)->subject($email_template->subject)->from($site_email->value,$site_title->value);
            });

            return redirect('/admin/artist-contact-request/list')->with('success','Reply Successfully!');
        }
    }

}
