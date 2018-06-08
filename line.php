 <?php
  

function send_LINE($msg){
 $access_token = 'vIqVV9lNX5yNkf7r4nm+FFAesNeaypSuYC/OOW9LOiRptDrt0/ELtOJekuhmabamyn5ssrtDODisO/XE2wvauE7MTr1C0xIY84aHbRZRQDRtEojxs7UtkvssK7Y4eS4Xj/r+krB7u9ueoZVAjmOvMwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U7aafed8fb3ffc8dc26a47b6711eb57a4',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
