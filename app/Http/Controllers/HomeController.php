<?php

namespace App\Http\Controllers;

use App\Category;
use App\Helper\sendMessageHelper;
use App\Modules\Ads\Models\Ads;
use App\Modules\BannerImage\Models\BannerImage;
use App\Modules\District\Models\District;
use App\Modules\FeaturedPatner\Models\FeaturedPatner;
use App\Modules\PaymentDetail\Models\PaymentDetail;
use App\Modules\Testimonial\Models\Testimonial;
use App\Modules\User\Models\ArtistOfTheDay;

use App\ProfileCounts;
use App\User;
use App\VerifyNumber;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd("here");


        if (Auth::user()->user_type == 1)
        {
            return redirect('admin/dashboard');
        }
        else
        {
            if (Auth::user()->user_type != 3 && Auth::user()->user_type != 1)
            {
                return redirect('/dashboard');
            }
            elseif (Auth::user()->user_type == 3)
            {
                if(Auth::user()->user_status == '0')
                {
                    Auth::logout();
                    return redirect('/')->with('error', 'Your account is not activated yet. Please contact admin');

                }
                else
                {
                    return redirect('/recruiter/dashboard');
                }


            }
            else
            {

                return redirect('/')->with('error', 'Something went wrong');
            }
        }

    }

    public function showArtistRegistrationForm($type = null)
    {
        //$categories = Category::all();
        return view('artist-registration', ['type' => $type ]);
    }

    public function showRecruiterRegistrationForm()
    {
        return view('recruiter-registration');
    }

    public function dem()
    {
        return view('demo-loder');
       /* $get_higgest_user_type = Category::max('category_type');
        $create_new_user_type = $get_higgest_user_type + 1 ;
        dd($create_new_user_type);*/
    }

    public function registerArtist(Request $request)
    {
        /*$user_type = '';
        if($request->category == 'Other')
        {
            $get_higgest_user_type = Category::max('category_type');
            $create_new_user_type = $get_higgest_user_type + 1 ;
            $create_new_category = new Category();
            $create_new_category->category_name = $request->new_category;
            $create_new_category->category_type = $create_new_user_type;
            $create_new_category->save();
            $user_type = $create_new_user_type;

        }
        else
        {
            $user_type = $request->category;
        }*/
       $create = User::create([
            'date_of_birth' => $request->date_of_birth,
            'language' => $request->language,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'user_type' => $request->category,
            'user_status' => '1',
            /*'profile_completed' => 10,*/
           'login_as' => 'artist',
            'name' => $request->name,
            'gender' => $request->gender,
            'password' => bcrypt($request->password),
        ]);
       if(isset($create))
       {
           //$send_message = sendMessageHelper::sendMessage($request->mobile);
           $message = 'Registraton Successfull Thank you...';
           $numbers = $request->mobile;
           $senderId="DEMOOS";
           $routeId="1";
           $authKey = "b8729fc9c2f434ea5ffb8252a7868c";
           $getData = 'mobileNos='.$numbers.'&message='.urlencode($message).'&senderId='.$senderId.'&routeId='.$routeId;
           $serverUrl="msg.msgclub.net";
           $url="http://".$serverUrl."/rest/services/sendSMS/sendGroupSms?AUTH_KEY=".$authKey."&".$getData;
           // init the resource
           $ch = curl_init();
           curl_setopt_array($ch, array(

               CURLOPT_URL => $url,

               CURLOPT_RETURNTRANSFER => true,

               CURLOPT_SSL_VERIFYHOST => 0,

               CURLOPT_SSL_VERIFYPEER => 0

           ));
           $output = curl_exec($ch);
           //Print error if any
           if(curl_errno($ch))
           {

               $error =  curl_error($ch);
               return json_encode(['id' => $create->id , 'message' => 'success']);
           }
           curl_close($ch);
           return json_encode(['id' => $create->id , 'message' => 'success']);
       }


        /*$languages = (explode(",",$data['language']));
        $available_to_work = (explode(",",$data['available_to_work']));
        dd($available_to_work);*/
    }

    public function registerRecruiter(Request $request)
    {
        $create_recruiter =  User::create([
            'represent' => $request->represent,
            'looking_for' => $request->i_am_looking,
            'company_name' => $request->company_name,
            'city' => $request->city,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'user_type' => '3',
            'user_status' => '0',
            'login_as' => 'recruiter',
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);
        if(isset($create_recruiter))
        {
            //$send_message = sendMessageHelper::sendMessage($request->mobile);
            $message = 'Registraton Successfull Thank you...';
            $numbers = $request->mobile;
            $senderId="DEMOOS";
            $routeId="1";
            $authKey = "b8729fc9c2f434ea5ffb8252a7868c";
            $getData = 'mobileNos='.$numbers.'&message='.urlencode($message).'&senderId='.$senderId.'&routeId='.$routeId;
            $serverUrl="msg.msgclub.net";
            $url="http://".$serverUrl."/rest/services/sendSMS/sendGroupSms?AUTH_KEY=".$authKey."&".$getData;
            // init the resource
            $ch = curl_init();
            curl_setopt_array($ch, array(

                CURLOPT_URL => $url,

                CURLOPT_RETURNTRANSFER => true,

                CURLOPT_SSL_VERIFYHOST => 0,

                CURLOPT_SSL_VERIFYPEER => 0

            ));
            $output = curl_exec($ch);
            //Print error if any
            if(curl_errno($ch))
            {

                $error =  curl_error($ch);
                return json_encode(['id' => $create_recruiter->id , 'message' => 'success']);
            }
            curl_close($ch);
            return json_encode(['id' => $create_recruiter->id , 'message' => 'success']);
        }


    }

    public function viewArtistListingPage(Request $request)
    {

        $user_types[1] = "Admin";
        $user_types[2] = "Sub_admin";
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
        $user_type = base64_decode(request()->segment(3));
        $user_details = User::where('user_type', $user_type)->where('user_status','=','2')->get();
        return view('listing-page', compact('user_details', 'user_types'));
    }

    public function viewArtistDetailPage()
    {
        $user_types[1] = "Admin";
        $user_types[2] = "Sub_admin";
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
        $user_id = base64_decode(request()->segment(3));
        $increment_profile_count = new ProfileCounts();
        $increment_profile_count->user_id = $user_id;
        $increment_profile_count->save();


        $user_details = User::where('id', $user_id)->first();
        $view_count = ProfileCounts::where('user_id',$user_id)->count();
        return view('listing-detail-page', compact('user_details', 'user_types','view_count'));
    }


    public function showArtistLogin()
    {
        return view('artist-login');

    }

    public function getLocation(Request $request)
    {

        $location = District::all()->take(4);
        if (isset($request->name)) {
            $location = District::where('name', $request->name)->get();
        }
        return json_encode($location);
    }



    public function showLandingPage(Request $request)
    {
        $user_types[1] = "Admin";
        $user_types[2] = "Sub_admin";
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


        $banner_images = BannerImage::all();
        $advertisements = Ads::all();
        $featured_partners = FeaturedPatner::all();
        $testimonials = Testimonial::all();
        $artists_of_the_day = ArtistOfTheDay::all();

        return view('welcome', compact('banner_images', 'advertisements', 'featured_partners', 'testimonials','artists_of_the_day','user_types'));
    }

    public function makeMobileNumberUnique(Request $request)
    {
        $number = 9898989898;
        $all_mobile_number = User::all('mobile');
        foreach ($all_mobile_number as $key => $mobile_number) {
            $change_mobile_no = User::where('mobile', $mobile_number->mobile)->first();
            $change_mobile_no->mobile = $number;
            $change_mobile_no->save();
            $number++;
        }

    }

    public function checkMobileNumberArtist(Request $request)
    {
        $mobile = $request->mobile_no_verification;
        if ($mobile) {
            $user_info = User::where('mobile', $mobile)->where('user_type','!=','3')->first();
            if ($user_info) {
                return "false";
            } else {
                return "true";
            }
        }
    }

    public function checkMobileNumberRecruiter(Request $request)
    {
        $mobile = $request->mobile;

        if ($mobile) {
            $user_info = User::where('mobile', $mobile)->where('user_type','3')->first();

            if ($user_info) {
                return "false";
            } else {
                return "true";
            }
        }
    }


    public function verifyMobileNumber(Request $request)
    {
        $otp = mt_rand(100000, 999999);
        $verify_number = new VerifyNumber();
        $verify_number->mobile_number = $request->number;
        $verify_number->otp = $otp;
        $verify_number->save();

        // Account details
        
        $message = 'Thank you for initiating registration on artclan website. please use '. $otp .' as one time password to verify your mobile number and proceed';

        $numbers = $request->number;

        $senderId="DEMOOS";
        $routeId="1";
        $authKey = "b8729fc9c2f434ea5ffb8252a7868c";
        $getData = 'mobileNos='.$numbers.'&message='.urlencode($message).'&senderId='.$senderId.'&routeId='.$routeId;
        $serverUrl="msg.msgclub.net";
        $url="http://".$serverUrl."/rest/services/sendSMS/sendGroupSms?AUTH_KEY=".$authKey."&".$getData;
        // Prepare data for POST request
        
        
   // init the resource

   $ch = curl_init();

   curl_setopt_array($ch, array(

       CURLOPT_URL => $url,

       CURLOPT_RETURNTRANSFER => true,

       CURLOPT_SSL_VERIFYHOST => 0,

       CURLOPT_SSL_VERIFYPEER => 0

   ));
   
   $output = curl_exec($ch);

   //Print error if any

   if(curl_errno($ch))

   {

       $error =  curl_error($ch);
          return json_encode(['number' => $request->number, 'message' => $error]);
   }
   
   return json_encode(['number' => $request->number,'generated_otp' => $otp, 'message' => 'success']);
   curl_close($ch);
        
    }
    public function verifyMobileNumber1(Request $request)
    {
        $otp = mt_rand(100000, 999999);
        $verify_number = new VerifyNumber();
        $verify_number->mobile_number = $request->number;
        $verify_number->otp = $otp;
        $verify_number->save();

        // Account details
        $apiKey = urlencode('LO9A0/OulyE-9QrYBlTSEJnnokThhVVnbgXGOgaNgw');

        // Message details
        $numbers = array($request->number);
        $sender = urlencode('TXTLCL');
        $message = rawurlencode('Thank you for initiating registration on artclan website. please use '. $otp .' as one time password to verify your mobile number and proceed');

        $numbers = implode(',', $numbers);


        // Prepare data for POST request
        $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
        //dd($data);

        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        // Process your response here
        //dd($response);
        $result = json_decode($response,true);
        if($result['status'] == 'success')
        {
            return json_encode(['number' => $request->number,'generated_otp' => $otp, 'message' => 'success']);
        }
        else
        {
            return json_encode(['number' => $request->number, 'message' => 'error']);
        }
    }

    public function verifyOtp(Request $request)
    {
        $check_otp = VerifyNumber::where('mobile_number',$request->mobile_number)->where('otp',$request->otp)->get();
        if(isset($check_otp) && count($check_otp) > 0)
        {
            return json_encode(['icon' => 'success','message' => 'Number Verified Successfully']);
        }
        else
        {
            return json_encode(['icon' => 'warning','message' => 'Incorrect OTP']);
        }

    }
    
    public function artistFilter(Request $request){
        $type = base64_decode($request->type);
        $filter_artist = User::query();
        $filter_artist = $filter_artist->where('user_type',$type);
        $filter_artist = $filter_artist->where('user_status','=','2');
        if(isset($request->search))
        {
            $search_value = $request->search;
            $filter_artist = $filter_artist->where('user_type',$type)->where('name',$search_value);
        }
        if(isset($request->city))
        {
            $city = $request->city;
            if($city != 'all')
            {
                $filter_artist = $filter_artist->where('user_type',$type)->where('city',$city);
            }
        }

        $filter_artist = $filter_artist->get();
        return json_encode($filter_artist);
    }

    public function loginAfterRegistration($id)
    {
        $id = base64_decode($id);
        Auth::loginUsingId($id);
        return redirect('/home');
    }

    public function contactArtist(Request $request)
    {

        $site_title = \App\Modules\Models\GlobalValue::where('slug','site-title')->first();
        $site_email = \App\Modules\Models\GlobalValue::where('slug','site-email')->first();

        //$data['USER_NAME'] = $request->name;
        $data['MESSAGE'] = strip_tags($request->artist_requirement);
        $data['SITE_TITLE'] = $site_title->value;
        $data['SITE_EMAIL'] = $site_email->value;

        $email_template = \App\Modules\Emailtemplate\Models\EmailTemplate::where('template_key','enquiry-artist')->first();
        Mail::send('Emailtemplate::enquiry-artist',$data, function($message) use ($site_email,$site_title,$request,$email_template) {
            $message->to($request->artist_email)->subject($email_template->subject)->from($site_email->value,$site_title->value);
        });
        return Redirect::back()->with('success','Enquiry Sent Successfully!');
    }



    //paytm function
    public function testPaytm()
    {
        return view('demo-pay');
    }

    public function payPaytm(Request $request)
    {
        return view('payment');
    }

    public function comeBack(Request $request)
    {
        $payment_response = new PaymentDetail();
        $payment_response->user_id = Auth::user()->id;
        $payment_response->payment_id = $request["ORDERID"];
        $payment_response->merchant_mid = $request["MID" ];
        $payment_response->txn_id = $request["TXNID"];
        $payment_response->txn_amount = $request["TXNAMOUNT"];
        $payment_response->payment_mode = $request["PAYMENTMODE"];
        $payment_response->currency = $request["CURRENCY"];
        $payment_response->txn_date = $request["TXNDATE"];
        $payment_response->status = $request["STATUS"];
        $payment_response->response_code = $request["RESPCODE"];
        $payment_response->response_message = $request["RESPMSG"];
        $payment_response->gateway_name = $request["GATEWAYNAME"];
        $payment_response->bank_txn_id = $request["BANKTXNID"];
        $payment_response->bank_name = $request["BANKNAME"];
        $payment_response->check_sum_hash = $request["CHECKSUMHASH"];
        $payment_response->save();
        if($request["STATUS"] == 'TXN_SUCCESS')
        {
            $change_user_payment_status = User::where('id',Auth::user()->id)->first();
            if(isset($change_user_payment_status))
            {
                $change_user_payment_status->payment_status = 'Paid';
                if($change_user_payment_status->save())
                {
                   return redirect('/dashboard');
                }

            }
        }

    }

    public function executeCommand()
    {
        /*echo exec('php artisan config:cache');
        echo exec('php artisan config:clear');*/
        echo exec('composer dump-autoload -o');
    }


}