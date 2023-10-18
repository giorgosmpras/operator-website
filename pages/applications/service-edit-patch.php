<?php
session_start();

if(isset($_GET['delete_id']) || $_GET['delete_id']!="") {
   $delete_id = $_GET['delete_id'];
   
   $url = 'https://api.valmore.gr/api/organization-delete-service?service_id='.$delete_id;
   // echo $url;
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
   curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   
   
   
   $resp = curl_exec($curl);
   curl_close($curl);
   
   //$resp = json_decode($resp, true);
   echo $resp;
   
   if($resp=="Services succesfully deleted!")
         {
            /*echo "correct";
            echo $decoded_json;
            echo $check;*/
            
               header("Location: ./datatables-services.php?delete=delete");
               exit();
            
      }else
      {
         header("Location: ./datatables-services.php?error=error");
               exit(); 
              /*echo "error";
            echo $decoded_json;
            echo $check;*/
      }

} else {
   $delete_id = '';



$id = $_POST['id'];
$subscriptionService= false;
$autoEntrance= false;
$title = $_POST['title'];
$fullName = $_POST['fullName'];
$body = $_POST['body'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$ownedBy = $_POST['ownedBy'];
$dateOfRegistration= $_POST['dateOfRegistration'];
$delete_id = $_GET['delete_id'];

//echo $delete_id;
if($_POST['userid']!= NULL){
   //echo $_POST['userid'];
   $userid=$_POST['userid'];

   $url1 = "https://api.valmore.gr/api/organization/add-service-user";

$curl1 = curl_init();
curl_setopt($curl1, CURLOPT_URL, $url1);
curl_setopt($curl1, CURLOPT_CUSTOMREQUEST, "PATCH");
curl_setopt($curl1, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);


$data1 = <<<DATA
{
   "service_id": "$id",
   "user_id": "$userid"
   
}
DATA;
//$data=json_encode($data);
curl_setopt($curl1, CURLOPT_POSTFIELDS, $data1);

$resp1 = curl_exec($curl1);
curl_close($curl1);
$resp1=str_replace("[","",$resp1);
   $resp1=str_replace("]","",$resp1);
   $resp1=str_replace("\"","",$resp1);
   
   $_SESSION['fullName'] = $resp1;
   echo $_SESSION['fullName'];
   
}else if($_POST["removeduserid"] != NULL){
   $removeduserid = $_POST["removeduserid"];

   $url2 = "https://api.valmore.gr/api/organization/remove-service-user";

   $curl1 = curl_init();
curl_setopt($curl1, CURLOPT_URL, $url2);
curl_setopt($curl1, CURLOPT_CUSTOMREQUEST, "PATCH");
curl_setopt($curl1, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);

$data2 = <<<DATA
{
   "service_id": "$id",
   "user_id": "$removeduserid"
   
}
DATA;
curl_setopt($curl1, CURLOPT_POSTFIELDS, $data2);

$resp1 = curl_exec($curl1);
curl_close($curl1);
$resp1=str_replace("[","",$resp1);
   $resp1=str_replace("]","",$resp1);
   $resp1=str_replace("\"","",$resp1);
   
   $_SESSION['fullName'] = $resp1;
   echo $_SESSION['fullName'];   

}else {
   $_SESSION['fullName'] = $fullName;
   $_SESSION['removeduserid'] = "";

};





$_SESSION['id'] = $id;

$_SESSION['title'] = $title;
$_SESSION['subscriptionService'] =$subscriptionService;
$_SESSION['autoEntrance'] =$autoEntrance;
$_SESSION['body'] = $body;
$_SESSION['email'] = $email;
$_SESSION['mobile'] = $mobile;
$_SESSION['ownedBy'] = $ownedBy;
$_SESSION['dateOfRegistration'] = $dateOfRegistration;

/*echo " id: ".$_SESSION['id'];
echo " name: ".$_SESSION['name'];
echo " title: ".$_SESSION['title'];
echo " fullname: ".$_SESSION['fullName'] ;
echo " email: ".$_SESSION['email'];
echo " mobile: ".$_SESSION['mobile'];
echo " date: ".$_SESSION['dateOfRegistration'];*/

$url = "https://api.valmore.gr/api/organization-edit-service";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


$data = <<<DATA
{
   "_id": "$id",
   "title": "$title",
   "email": "$email",
   "mobile": $mobile,
   "body":"$body"
}
DATA;
//$data=json_encode($data);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);
curl_close($curl);


//echo $resp;

//$decoded_json = json_decode($resp,true);
      //var_dump($decoded_json,true);
     // $check=$decoded_json['success'];
      if(isset($resp)=="Services succesfully deleted!")
      {
         /*echo "correct";
         echo $decoded_json;
         echo $check;*/
         
            header("Location: ./datatables-services.php?edited=edited");
            exit();
         
   }else
   {
      header("Location: ./datatables-services.php?error=error");
            exit(); 
           /*echo "error";
         echo $decoded_json;
         echo $check;*/
   }

}      
?>