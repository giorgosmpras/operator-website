<?php

$name= $_POST['name'];
  $lastname= $_POST['lastname'];
  $fname =$_POST['fname'];
  $mname =$_POST['mname'];
  $mobile =$_POST['mobile'];
  $email =$_POST['email'];
  $str_arr = explode ("-", $_POST['date']);
   $final_date= $str_arr[0];

   echo "name :".$name;
   echo " lastname :".$lastname;
   echo " fathers_name :".$fname;
   echo " mothers_name :".$mname;
   echo " mobile :".$mobile;
   echo " email :".$email;

$url = "https://api.valmore.gr/api/organization-register-user";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$data = <<<DATA
{
   "name": "$name",
   "lastname": "$lastname",
   "fathers_name": "$fname",
   "mothers_name": "$mname",
   "email": "$email",
   "birth_date": "$final_date",
   "mobile": $mobile,
   "status": "Δημότης και Κατοικος",
   "minor": false
}
DATA;
//$data=json_encode($data);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);
curl_close($curl);

echo $resp;

$decoded_json = json_decode($resp,true);
      //var_dump($decoded_json,true);
      if(isset($decoded_json['message']))
      {
         
         $message= $decoded_json['message'];
         if ($message=="Successful signup!"){
         
            header("Location: ./new-user.php?success=success");
            exit();
         }else{
         
         header("Location: ./new-user.php?error=error");
   exit();
}
   }else
   {
      header("Location: ./new-user.php?error=error");
            exit();
   }
      
      
      
      
?>