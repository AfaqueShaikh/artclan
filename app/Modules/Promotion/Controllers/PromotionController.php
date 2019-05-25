<?php

namespace App\Modules\Promotion\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Testimonial\Models\Testimonial;
use App\Modules\Country\Models\Country;
use App\Modules\District\Models\District;
use App\Modules\State\Models\State;
use App\Modules\Taluka\Models\Taluka;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Mail;
use Validator;
use DataTables;
use Image;
use Storage;

class PromotionController extends Controller
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
    public function listPromotionUser()
    {
        return view('Promotion::list');
    }

    public function promotionUserData()
    {
        $promotion_user = User::select('id','name','mobile')->where('user_type','<>','1')->get();
        //dd($promotion_user);
        return Datatables::of($promotion_user)

            ->make(true);
    }

    public function sendPromotionMessageUser(Request $request)
    {
        //dd($request->mobile_number);
        // Account details
        $apiKey = urlencode('Km7TZwuYT5A-IX49UogjKkdPXj3HKKHaAk3YdJh40t');

        // Message details
        $numbers = $request->mobile_number;

        $sender = urlencode('TXTLCL');
        $message = rawurlencode('Promotional Message');
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
            return json_encode(['type' => 'success', 'msg' => 'Promotional Messages Sent successfully']);
        }
        else
        {
            return json_encode(['type' => 'error', 'msg' => 'Something Went Wrong']);
        }
    }


}
