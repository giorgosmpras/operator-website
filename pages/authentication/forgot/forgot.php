<?php

$url = 'https://api.valmore.gr/api/organization-forgot-password?email='.$_POST['email'];

//The data you want to send via POST
$fields = [
    'email'=> $_POST['email']
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

if($decoded_json['message'] == 'Success!'){

    header("Location: ./cover.php?success=success");
    exit();
}else if ($resp == 'Reset password process is already instanciated'){
         
    header("Location: ./cover.php?already=already");
    exit();
}else {
    header("Location: ./cover.php?error=error");
}
   