<?php
session_start();
date_default_timezone_set("Asia/Taipei");
//ini_set("display_errors",1);
header('Pragma: no-cache');
require_once("Facebook/autoload.php");

$fb = new \Facebook\Facebook([
    // localhost
    'app_id'     => '949020238583180',
    'app_secret' => 'ec4755f18b7daf0895f7df54084ce3f8',
    'default_graph_version' => 'v2.8',
]);

$permissions = ['email']; // 其他權限
$helper = $fb->getRedirectLoginHelper();

try {
  $accessToken = $helper->getAccessToken();
  
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
    
    $response = $fb->get('/me?fields=id,name,email', $accessToken);
    $userNode = $response->getGraphUser(); 
    
    $gpUserData = array(
        'oauth_provider'=> 'fb',
        'oauth_uid'     => $userNode["id"],
        'first_name'    => $userNode["name"],
        'last_name'     => "",
        'email'         => $userNode["email"],
    );
    $userData = $gpUserData;
	
	//Storing user data into session
	$_SESSION['userData'] = $userData;
    echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';


} else {
    echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
}

?>