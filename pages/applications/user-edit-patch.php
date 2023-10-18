<?php
session_start();

if(isset($_GET['delete_id']) || $_GET['delete_id']==="") {
   $delete_id = $_GET['delete_id'];
//got for deletion and redirect to view
$url = 'https://api.valmore.gr/api/organization-delete-user?user_id='.$delete_id;


$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
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

            header("Location: ./datatables-users.php?successDeactive=successDeactive");
            exit();

} else if (isset($_GET['activate_id'])|| $_GET['activate_id']==="") {
   $activate_id = $_GET['activate_id'];
//got for deletion and redirect to view
$url = 'https://api.valmore.gr/api/organization/activate-user?_id='.$activate_id;


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


if(isset($resp["message"])=="Successful signup!")
      {
         /*echo "correct";
         echo $decoded_json;
         echo $check;*/
         
            header("Location: ./datatables-users.php?successActive=successActive");
            exit();
         
   }else
   {
      header("Location: ./datatables-users.php?error=error");
            exit(); 
           /*echo "error";
         echo $decoded_json;
         echo $check;*/
   }

}


else {
   $delete_id = '';

$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$fathers_name = $_POST['fname'];
$mothers_name = $_POST['mname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$birth_date = $_POST['date'];
$dateOfRegistration= $_POST['dateOfRegistration'];

$_SESSION['id'] = $id;
$_SESSION['name'] = $name;
$_SESSION['lastname'] = $lastname;
$_SESSION['fathers_name'] = $fathers_name;
$_SESSION['mothers_name'] = $mothers_name;
$_SESSION['email'] = $email;
$_SESSION['mobile'] = $mobile;
$_SESSION['birth_date'] = $birth_date;
$_SESSION['dateOfRegistration'] = $dateOfRegistration;

/*echo " id: ".$_SESSION['id'];
echo " name: ".$_SESSION['name'];
echo " lastname: ".$_SESSION['lastname'];
echo " fathers_name: ".$_SESSION['fathers_name'] ;
echo " mothers_name: ".$_SESSION['mothers_name'] ;
echo " email: ".$_SESSION['email'];
echo " mobile: ".$_SESSION['mobile'];
echo " birth_date: ".$_SESSION['birth_date'];
echo " birth_date: ".$birth_date;*/

$url = "https://api.valmore.gr/api/organization-edit-user";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


$data = <<<DATA
{
   "_id": "$id",
   "name": "$name",
   "lastname": "$lastname",
   "fathers_name":"$fathers_name",
   "mothers_name":"$mothers_name",
   "email": "$email",
   "mobile": $mobile,
   "birth_date":"$birth_date"
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
      if(isset($resp)=="User has been updated!")
      {
         /*echo "correct";
         echo $decoded_json;
         echo $check;*/
         
            header("Location: ./datatables-users.php?edited=edited");
            exit();
         
   }else
   {
      header("Location: ./datatables-users.php?error=error");
            exit(); 
           /*echo "error";
         echo $decoded_json;
         echo $check;*/
   }

}
          
?>