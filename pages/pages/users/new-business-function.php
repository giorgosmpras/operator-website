<?php

$title= $_POST['title'];
$name= $_POST['name'];
$mobile =$_POST['mobile'];
$email =$_POST['email'];
$body =$_POST['body'];
$selectedUserId=$_POST['selectedUserId'];
  
/*echo $title;
echo $name;
echo $mobile;
echo $email;
echo $body;
echo $selectedUserId;*/


$url = "https://api.valmore.gr/api/organization-register-business";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$data = <<<DATA
{
   "title": "$title",
   "name": "$name",
   "email": "$email",
   "mobile": $mobile,
   "body":"$body",
   "ownedBy": "$selectedUserId"
   
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
         
         //echo "ok";
         
            header("Location: ./new-business.php?success=success");
            exit();
         
   }else
   {
      header("Location: ./new-business.php?error=error");
            exit();
   }
          
?>