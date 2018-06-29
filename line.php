 <?php
  

function send_LINE($msg){
 $access_token = 'oQP+9trIj8cu5euYApwjCUuhjIYAGWFqBCxH+xq4nV+r7srgSg/Kz5zqJTLnMi1Gh8RGyw6eMw7jFdfs2QpVgw1hKhd1qesIKE7wYNbD3hHwBbhCGrROslw956wE4nUbWAtpHn45N2zkva4oiWkMggdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U81c386d87528dafffc12d104f4fc6612',
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
