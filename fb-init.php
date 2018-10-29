<?php
if(!isset($_SESSION)){
    session_start();
}

require './vendor/autoload.php';

$fb = new  Facebook\Facebook([
    'app_id' => '160657138094358',
    'app_secret'=>'b123be8f4380262d8154d716579dc8c2',
    'default_graph_version'=> 'v2.7'
]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/Foodie/");
try{
    $accessToken = $helper->getAccessToken();
    if(isset($accessToken)){
        $_SESSION['access_token'] = (string) $accessToken;
        header("Location:index.php");
    }
}
catch(Exception $exc){
    echo $exc->getTraceAsString();
}
