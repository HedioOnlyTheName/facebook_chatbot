<?php 
        require 'keys.php';
        if(isset($_REQUEST['hub_challenge'])) {
             $challenge = $_REQUEST['hub_challenge'];
             $hub_verify_token = $_REQUEST['hub_verify_token'];
        }
            
        if ($hub_verify_token === $verify_token) {
             echo $challenge;
        }
            
        $input = json_decode(file_get_contents('php://input'), true);
        $sender = $input['entry'][0]['messaging'][0]['sender']['id'];
        $message = $input['entry'][0]['messaging'][0]['message']['text'];

        require 'functions.php';
        //===========================================================
        
        //Tự reply
        auto_rep($message,$access_token,$sender,$input);
        
        

?>