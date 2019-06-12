<?php

namespace App\Modules\ArtistRecruiterRequest\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ArtistContactRequest\Models\ArtistRequest;
use App\Modules\ArtistRecruiterRequest\Models\ArtistRecruiterRequest;
use App\Modules\ContactUs\Models\EmailTemplate;
use App\Modules\ContactUs\Models\GlobalValue;
use App\Modules\User\Models\ArtistRequestForRecruiterAccount;
use DataTables;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Modules\ContactUs\Models\ContactUs;
use Validator;
use Image;
use Storage;
use Mail;

class ArtistRecruiterRequestController extends Controller {

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
    public function listArtistRecruiterRequest() {
        return view('ArtistRecruiterRequest::list');
    }

    public function ArtistRecruiterData() {
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
        $artist_recruiter_request = ArtistRecruiterRequest::all();


        return Datatables::of($artist_recruiter_request)
            ->addColumn('artist_category', function($artist_request) use($user_types) {
                return $user_types[$artist_request->user->user_type];
            })


            ->make(true);
    }

    public function ApproveArtistRecruiterRequest($id)
    {

        $artist_detail = ArtistRequestForRecruiterAccount::where('id',$id)->first();
        $change_request_status = User::where('id',$artist_detail->artist_id)->first();
        $change_request_status->applied_for_recruiter_account = 'Applied/Approved';

        $create_recruiter_account = User::create([
            'mobile' => $artist_detail->artist_mobile_no,
            'email' => $artist_detail->artist_email,
            'user_type' => '3',
            'user_status' => '1',
            'login_as' => 'recruiter',
            'name' => $artist_detail->artist_name,
            'password' => bcrypt(123456789),
        ]);
        $change_request_status->artist_recruiter_account_id = $create_recruiter_account->id;
        $change_request_status->save();
        $artist_detail->request_status = 'Approved';
        $artist_detail->save();
        if(isset($create_recruiter_account))
        {
            return redirect('/admin/artist-recruiter/list')->with('success','Request Approved Successfully!');
        }



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
