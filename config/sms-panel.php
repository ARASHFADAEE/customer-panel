<?php


class sms
{
    protected $apikey;


    public function __construct($apikey)
    {

        $this->apikey = $apikey;
    }


    public function send_sms_api($phone,$paramt1,$template_id){
        $apiKey = $this->apikey;
        $params = [
            "mobile" => "+98$phone",
            "method" => "sms",
            "templateID" => $template_id,
            "params" => [
                "$paramt1"


            ]
        ];
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.msgway.com/send',
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => json_encode($params),
            CURLOPT_HTTPHEADER => array(
                'apiKey: ' . $apiKey,
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
    }

    public function send_sms_welcome($phone , $paramt , $template_id )
    {
        $this->send_sms_api($phone , $paramt ,$template_id);


        
    }

    public function send_sms_payment($phone,$paramt,$template_id){
        $this->send_sms_api($phone,$paramt,$template_id);
    }


    public function send_otp($phone)
    {
        $apiKey = $this->apikey;
        $number_otp = rand( 3345 , 9999);
        $params = [
            "mobile" => "+98$phone",
            "method" => "sms",
            "templateID" => $this->template_id,
            "code" => "$number_otp" , //
        ];
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.msgway.com/send',
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => json_encode($params),
            CURLOPT_HTTPHEADER => array(
                'apiKey: ' . $apiKey,
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
    }


    public function send_sms_create_project($phone,$paramt1, $paramt2,$template_id){
        $apiKey = $this->apikey;
        $params = [
            "mobile" => "+98$phone",
            "method" => "sms",
            "templateID" => $template_id,
            "params" => [
                "$paramt1",
                "$paramt2"


            ]
        ];
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.msgway.com/send',
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => json_encode($params),
            CURLOPT_HTTPHEADER => array(
                'apiKey: ' . $apiKey,
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);



    }
}


$sms= new sms('87664e872d5684f78e403b40f13fc3df');