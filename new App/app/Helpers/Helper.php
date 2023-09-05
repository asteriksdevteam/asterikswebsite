<?php
namespace App\Helpers;

class Helper
{
    static function getCurlRequest($url)
    {
             $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         
            $response = curl_exec($ch);
            $err = curl_error($ch);
            curl_close($ch);
            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
               return $responses = json_decode($response, true);
              }
    }
     function  postCurlRequest($data,$url)
        {      
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         
            $response = curl_exec($ch);
            $err = curl_error($ch);
            curl_close($ch);
            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $responseArray = ($response);
                return $responseArray;
            }
        }
    
        function removeSpecialCharacters($value)
        {
            $character=preg_replace('/[^A-Za-z0-9\-]/', '', $value);
            return $character;
        }
   
}
