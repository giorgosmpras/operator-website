<?php
   
      $url = 'https://api.valmore.gr/api/organization-login?email='.$_POST['email']."&"."password=".$_POST['password'];
      

      //The data you want to send via POST
      $fields = [
          'email'      => $_POST['email'],
          'password' => $_POST['password'],
          
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
      $result = curl_exec($ch);
      //echo $result;
      
      $decoded_json = json_decode($result,true);
      //var_dump($decoded_json,true);
      
      $email= $decoded_json['handler']['email'];
      $id= $decoded_json['handler']['id'];
      if ($email!="" && $id!=""){
         
         header("Location: ../../pages/users/new-user.php");
         exit();
      }else
      
      header("Location: ./cover.php?error=error");
exit();
      // exit();
   // }
?>