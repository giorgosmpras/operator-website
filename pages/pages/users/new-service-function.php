<?php

$title= $_POST['title'];

$mobile =$_POST['mobile'];
$email =$_POST['email'];
$selectedUserId=$_POST['selectedUserId'];
$body=$_POST['body'];

echo $title;

echo $mobile;
echo $email;
echo $selectedUserId;
echo $body;

$url = "https://api.valmore.gr/api/organization-register-service";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$data = <<<DATA
{
   "title": "$title",
   "name": "name",
   "email": "$email",
   "mobile": $mobile,
   "ownedBy": "$selectedUserId",
   "subscriptionService":false,
   "autoEntrance": false,
   "body":"$body"
}
DATA;
//$data=json_encode($data);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);
curl_close($curl);

echo $resp;

/*$decoded_json = json_decode($resp,true);
      var_dump($decoded_json,true);
      $check=$decoded_json['success'];*/
      if($resp!=false)
      {
         /*echo "correct";
         echo $decoded_json;
         echo $check;*/
         
            header("Location: ./new-service.php?success=success");
            exit();
         
   }else
   {
      header("Location: ./new-service.php?error=error");
            exit(); 
           /*echo "error";
         echo $decoded_json;
         echo $check;*/
   }
          
?>