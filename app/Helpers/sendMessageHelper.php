<?php
namespace App\Helper;


class sendMessageHelper
{

    public static function sendMessage($mobile_no)
    {
        $message = 'Registraton Successfull Thank you...';
        $numbers = $mobile_no;
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
            return json_encode(['message' => 'false']);
        }
        curl_close($ch);
        return json_encode(['message' => 'true']);
    }

}