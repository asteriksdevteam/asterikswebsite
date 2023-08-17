<?php
namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

trait  CommonTraits
{

    function CurlPost($data,$order_id,$transation_id)
    {
        $merchant_id='GTB125359B01';
        $version_id=56;
        $gatewayurl="https://eu-gateway.mastercard.com/api/rest/version/".$version_id."/merchant/".$merchant_id."/order/".$order_id."/transaction/".$transation_id."";
        $auth = base64_encode("merchant.GTB125359B01:bb3d19c618807c177dfacce42e7686e2");

        $headers = array(
            'Content-Type: application/json', 
            'Authorization: Basic '.$auth, // url authorization
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        // curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: Application/json;charset=UTF-8"));
        curl_setopt($ch, CURLOPT_URL, $gatewayurl);
        // curl_setopt($ch, CURLOPT_USERPWD, "merchant.GTB125359B01:bb3d19c618807c177dfacce42e7686e2" );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response=curl_exec($ch);
         if (curl_error($ch))
        $response = "cURL Error: " . curl_errno($ch) . " - " . curl_error($ch);
        return  $response;

  
    }

    public function mobileMoneyCurlPost($data,$url)
    {
        // dd($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Length: " . strlen(json_encode($data))));
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: Application/json;charset=UTF-8"));
        // curl_setopt($ch, CURLOPT_URL, $gatewayurl);
        // curl_setopt($ch, CURLOPT_USERPWD, "merchant.GTB100780B02:366c0e9dbec7ed79f06531d8e6bddfc4" );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response=curl_exec($ch);
         if (curl_error($ch)){
          $curlResponse = (array('success'=>$response,'reponse'=>curl_errno($ch)." - ".curl_error($ch)));
         }else
         {
             $curlResponse=$response;
         }
          curl_close($ch);
           
          return $curlResponse;
       
    }


    public function masterCard($data,$order_id,$returnurl)
    {
        $merchant = "GTB125359B01"; //GTB125359B01
         $api_password =  "bb3d19c618807c177dfacce42e7686e2"; //2d70287af76486bd8733d9d4a60fee54
        // live  bb3d19c618807c177dfacce42e7686e2
        $amount = $data['totalpirce'];
        $currency = $data['currency'];
        $description = "Money transfer";
        //text for url authorization
        // dd($returnurl);
        $auth = base64_encode("merchant.".$merchant.":".$api_password);
        $headers = array(
            'Content-Type: application/json', 
            'Authorization: Basic '.$auth, // url authorization
        );
    //body fields to pass to server in json
      $post_fields = '{
         "apiOperation":"CREATE_CHECKOUT_SESSION",
         "interaction":{
            "operation":"PURCHASE",   
            "returnUrl":"'.$returnurl.'"
            },
            "order":{
                "id":"'.$order_id.'",
                "amount":'.$amount.',
                "currency":"'.$currency.'"       
            }
        }';
      
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://eu-gateway.mastercard.com/api/rest/version/58/merchant/{$merchant}/session");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
        $output = curl_exec($ch);
        $responseObj= "";
        if(curl_errno($ch)){
            echo "cURL Error:". curl_error($ch);
        }
        else{
            $responseObj = json_decode($output,true); // convert json to array
            $sessionId = @$responseObj["session"]["id"]; //retrieve session id from array
        }         
        curl_close($ch);
       
       return array('success'=>true,'sessionId'=>$sessionId ,'merchant'=>$merchant,'paymentresponse'=>$responseObj,'order_id'=>$order_id,'request'=>$data); 
        
    }
} 

?>