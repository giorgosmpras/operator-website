<?php

session_start();

if(isset($_GET['delete_id'])) {
   $delete_id = $_GET['delete_id'];
//got for deletion and redirect to view
$url = "https://api.valmore.gr/api/organization/delete-event?id=" . $delete_id;
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$resp = curl_exec($curl);
echo $resp;

if ($resp== "Event was deleted successfully"){
   header("Location: ./datatables-events.php?delete=delete");
            exit();
}else{
   header("Location: ./datatables-events.php?error=error");
            exit(); 
}


} else {
   $delete_id = '';

$title = $_POST['title'];
$message = $_POST['message'];
$id = $_POST['id'];

$_SESSION['title'] = $title;
$_SESSION['message'] = $message;
$_SESSION['id'] = $id;

$url = "https://api.valmore.gr/api/organization/update-event?id=" . $id;

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$data = <<<DATA
{
   "title": "$title",
   "body": "$message"
}
DATA;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);
curl_close($curl);

$resp = json_decode($resp, true);
echo $resp["success"];

if(isset($resp["message"])=="Updated successfully. ")
      {
         /*echo "correct";
         echo $decoded_json;
         echo $check;*/
         
            header("Location: ./datatables-events.php?edited=edited");
            exit();
         
   }else
   {
      header("Location: ./datatables-events.php?error=error");
            exit(); 
           /*echo "error";
         echo $decoded_json;
         echo $check;*/
   }
}