<?php
require_once( 'flutterapi.php' );
$db = new BD();
$db->connect();
$respons= [];

$usersname =isset($_REQUEST['usersname']) ? $_REQUEST['usersname'] : "";
$email =isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
 //validaion

if(!isset($usersname) || empty($usersname)){
  //handel error
   $respons['res'] =false;
   $respons['messsage'] = "pleas enter valid uesrename";

}else if(!isset($email) || empty($email) || !filter_var($email , FILTER_VALIDATE_EMAIL)){
  //handel error
  $respons['res'] =false;
  $respons['messsage'] = "pleas enter valid email";
}else {
    $isCreated=$db->createusers($usersname,$email);

    if($isCreated==true){
      $respons['res'] = true;
      $respons['messsage'] = "uesre is created";

    }else {
      $respons [ 'res'] = false;
      $respons['messsage'] = "uesre is not created";

    }

}


 echo json_encode($respons);


?>
