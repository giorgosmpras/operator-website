<?php

$url = "https://api.valmore.gr/api/organization-reset-password?email=".$_POST['email']."&newPassword=".$_POST['pass'];

$email = $_POST['email'];
$pass = $_POST['pass'];

//The data you want to send via POST
$fields = [
    'email'      => $_POST['email'],
    'newPassword'      => $_POST['pass']
];

//url-ify the data for the POST
$fields_string = http_build_query($fields);

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

//execute post
$resp = curl_exec($ch);
$decoded_json = json_decode($resp,true);
echo $resp;

if($decoded_json['message'] == 'Password reset successfully, now you can use new password.'){

    header("Location: ../signin/cover.php");
    exit();
}else{
    header("Location: ./cover.php?error=error");
}