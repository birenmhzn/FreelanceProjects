<?php

class Firebase {

    function apikey(){
        // Firebase API Key
        $FIREBASE_API_KEY = 'AAAA8tma6ZA:APA91bHEkv6DXNBLBEW99mTQ2skXcn-ccGO7_oGVtOvsiMu3QlFcm4O6CMOGXfFKwmP9KqaTEKTa8WfY8jW-vM_NAIOa1w3gVLrP90XCe2sSytDxcEIsFeNOQzKitMAWv6J0li7Yvhvn';
        return $FIREBASE_API_KEY;
    }

    // sending push message to Global user by firebase reg id
    public function send($to, $message) {
        include('Config.php');
        $sql = "SELECT [PushNotificationToken] FROM [dbo].[User]";
        $stmt = sqlsrv_query($connect, $sql); 
        while($row = sqlsrv_fetch_array($stmt)) 
        {
            $PushNotificationToken1 = $row['PushNotificationToken'];
            if ($PushNotificationToken1 != "") {
                $fields = array(
                    'to' => $PushNotificationToken1,
                    'data' => $message,
                );
                //return $this->sendPushNotification($fields);

                //require_once 'PushNotificationConfig.php';
 
                // Set POST variables
                $url = 'https://fcm.googleapis.com/fcm/send';
                $apikey = apikey();
                $headers = array(
                    'Authorization: key=' . $apikey,
                    'Content-Type: application/json'
                );
                // Open connection
                $ch = curl_init();
         
                // Set the url, number of POST vars, POST data
                curl_setopt($ch, CURLOPT_URL, $url);
         
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         
                // Disabling SSL Certificate support temporarly
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
         
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
         
                // Execute post
                $result = curl_exec($ch);
                if ($result === FALSE) {
                    die('Curl failed: ' . curl_error($ch));
                }
            }else
            {
                continue;
            }
        }
    }




     // sending push message to single user by firebase reg id
    public function sendforleads($to, $message) {
        $fieldsforleads = array(
            'to' => $to,
            'data' => $message,
        );
        return $this->sendPushNotification($fieldsforleads);
    }

    // function makes curl request to firebase servers
    private function sendPushNotification($fieldsforleads) {
         
        //require_once 'PushNotificationConfig.php';
 
        // Set POST variables
        $url = 'https://fcm.googleapis.com/fcm/send';
        $apikey = apikey();
 
        $headers = array(
            'Authorization: key=' . $apikey,
            'Content-Type: application/json'
        );
        // Open connection
        $ch = curl_init();
 
        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
 
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fieldsforleads));
 
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
 
        // Close connection
        //curl_close($ch);
 
        return $result;
    }
}
?>