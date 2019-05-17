<?php

namespace App\Modules\ContactUs\Controllers;

use App\Http\Controllers\Controller;
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

class ContactUsController extends Controller {

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
    public function listContactUs() {
        return view('ContactUs::list');
    }

    public function contactusData() {
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
        $contactus = ContactUs::all();
        return Datatables::of($contactus)
            ->addColumn('category', function($contactus) use($user_types) {
                return $user_types[$contactus->category];
            })

            ->addColumn('message', function($contactus)  {
                return strip_tags($contactus->message);
            })
            ->addColumn('status', function($contactus) {
                return $contactus->reply == '' ? '<label class="label label-danger">New, Not replied yet!</label>' : "<label class='label label-success'>Replied</label>";
            })

            ->rawColumns(['status','reply'])
            ->make(true);
    }

    public function addContactRequest(Request $request)
    {
        if ($request->method() == "GET")
        {
            return view('ContactUs::create');
        }
        else {
            $validator = Validator::make($request->all(), [
                'category' => 'required',
                'phone_number' => 'required',
                'email' => 'required',
                'message' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            } else {

                $contactus = new ContactUs();
                $contactus->category = $request->category;
                $contactus->email = $request->email;
                $contactus->phone_number = $request->phone_number;
                $contactus->message = $request->message;

                if ($request->hasFile('image')) {
                    $photo = $request->file('image');
                    $ext = $request->image->getClientOriginalExtension();
                    $new_name = time() . '.' . $ext;
                    $destinationPath = base_path() . '/storage/app/public/contactus';

                    $img = Image::make($photo->getRealPath());
                    $img->move($destinationPath, $new_name);

                    $contactus->image = $new_name;
                }

                $contactus->save();

                $site_title = \App\Modules\Models\GlobalValue::where('slug', 'site-title')->first();
                $site_email = \App\Modules\Models\GlobalValue::where('slug', 'site-email')->first();

                //$data['USER_NAME'] = $request->name;
                $data['SITE_TITLE'] = $site_title->value;
                $data['SITE_EMAIL'] = $site_email->value;

                $email_template = \App\Modules\Emailtemplate\Models\EmailTemplate::where('template_key', 'contact-us-thanks')->first();
                Mail::send('Emailtemplate::contact-us-thanks', $data, function ($message) use ($site_email, $site_title, $request, $email_template) {
                    $message->to($request->email)->subject($email_template->subject)->from($site_email->value, $site_title->value);
                });
                return redirect('admin/contactus/list')->with('success','Contact Request Created Successfully!');
            }
        }

    }

    public function createContactUs(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        else
        {
            $contactus = new ContactUs();

            $contactus->category = $request->category;
            $contactus->email = $request->email;
            $contactus->phone_number = $request->phone_number;
            $contactus->message = $request->description;

            if ($request->hasFile('image')) {
                $photo = $request->file('image');
                $ext = $request->image->getClientOriginalExtension();
                $new_name = time() . '.' . $ext;
                $destinationPath = base_path().'/storage/app/public/contactus';

                $img = Image::make($photo->getRealPath());
                $img->move($destinationPath, $new_name);

                $contactus->image = $new_name;
            }

            $contactus->save();

            $site_title = \App\Modules\Models\GlobalValue::where('slug','site-title')->first();
            $site_email = \App\Modules\Models\GlobalValue::where('slug','site-email')->first();

            //$data['USER_NAME'] = $request->name;
            $data['SITE_TITLE'] = $site_title->value;
            $data['SITE_EMAIL'] = $site_email->value;

            $email_template = \App\Modules\Emailtemplate\Models\EmailTemplate::where('template_key','contact-us-thanks')->first();
            Mail::send('Emailtemplate::contact-us-thanks',$data, function($message) use ($site_email,$site_title,$request,$email_template) {
                $message->to($request->email)->subject($email_template->subject)->from($site_email->value,$site_title->value);
            });
            //return redirect()->back()->with('success','Thank You For Contacting Us');
            return json_encode(['message' => 'Thank You For Contacting Us' ]);
        }
    }

    public function updateContactUs(Request $request, $id) {
        $contactus = ContactUs::find($id);
        if ($request->method() == "GET") {
            return view('ContactUs::edit', ['contactus' => $contactus]);
        } else {

            $validator = Validator::make($request->all(), [
                'value' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $contactus->reply = $request->value;
            $contactus->save();

            $site_title = \App\Modules\Models\GlobalValue::where('slug','site-title')->first();
            $site_email = \App\Modules\Models\GlobalValue::where('slug','site-email')->first();

            $data['MESSAGE'] = strip_tags($request->value);
            $data['SITE_TITLE'] = $site_title->value;
            $data['SITE_EMAIL'] = $site_email->value;
            $email_template =  \App\Modules\Emailtemplate\Models\EmailTemplate::where('template_key','contact-us-reply')->first();
            Mail::send('Emailtemplate::contact-us-reply',$data, function($message) use ($site_email,$site_title,$contactus,$email_template) {
                $message->to($contactus->email)->subject($email_template->subject)->from($site_email->value,$site_title->value);
            });

            return redirect('admin/contactus/list')->with('success','Reply Successfully!');
        }
    }

}
