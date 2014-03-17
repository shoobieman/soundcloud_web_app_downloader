<?php
//create an authenticated Soundcloud object to act on behalf of the user

require_once 'Services/Soundcloud.php'

//initlize client object
$user = new Services_Soundcloud (
    'CLIENT_ID' , 'CLIENT_SECRET' , 'REDIRECT_URL');

 //redirect supplied object credentials to soundcloud auth
 
 header("Location: " . $user->getAuthorizeURL());
 
 $code = $_GET['code'];
 $access_token = $client->accessToken($code);
 
//once user agrees, exchange code for acess token
$user = new Services_Soundcloud('CLIENT_ID' , 'YOURCLIENTSECRE');
$user->setAccessToken('$access_token');

 
?>
