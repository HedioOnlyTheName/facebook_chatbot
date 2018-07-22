<?php
$access_token = "EAAITU5t5zZCQBAGpLRapij6jDMZCtzKZAG9pdrurPNGUsZBMmdg1MC0pQRtrrwUwTZBd9WWSjgFqbS7up0hvZCk1tuFwW66QBM21tDibZC28oTqVW5yQvy7mZAbGDqUeKqSAS4uM3EdCfyGbU1IPTJlvE3YGoZBq0ucco1DzmpiHzesxXlbIvIRPg";
$verify_token = "fb_bot_chat";
$hub_verify_token = null;

if(isset($_REQUEST['hub_challenge'])) {
 $challenge = $_REQUEST['hub_challenge'];
 $hub_verify_token = $_REQUEST['hub_verify_token'];
}

if ($hub_verify_token === $verify_token) {
 echo $challenge;
}
?>
