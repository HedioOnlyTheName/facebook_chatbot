<?php

        function convertAccentsAndSpecialToNormal($string) {
            $table = array(
                'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Ă'=>'A', 'Ā'=>'A', 'Ą'=>'A', 'Æ'=>'A', 'Ǽ'=>'A',
                'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'ă'=>'a', 'ā'=>'a', 'ą'=>'a', 'æ'=>'a', 'ǽ'=>'a',
        
                'Þ'=>'B', 'þ'=>'b', 'ß'=>'Ss',
        
                'Ç'=>'C', 'Č'=>'C', 'Ć'=>'C', 'Ĉ'=>'C', 'Ċ'=>'C',
                'ç'=>'c', 'č'=>'c', 'ć'=>'c', 'ĉ'=>'c', 'ċ'=>'c',
        
                'Đ'=>'D', 'Ď'=>'D',
                'đ'=>'d', 'ď'=>'d',
        
                'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ĕ'=>'E', 'Ē'=>'E', 'Ę'=>'E', 'Ė'=>'E',
                'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ĕ'=>'e', 'ē'=>'e', 'ę'=>'e', 'ė'=>'e',
        
                'Ĝ'=>'G', 'Ğ'=>'G', 'Ġ'=>'G', 'Ģ'=>'G',
                'ĝ'=>'g', 'ğ'=>'g', 'ġ'=>'g', 'ģ'=>'g',
        
                'Ĥ'=>'H', 'Ħ'=>'H',
                'ĥ'=>'h', 'ħ'=>'h',
        
                'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'İ'=>'I', 'Ĩ'=>'I', 'Ī'=>'I', 'Ĭ'=>'I', 'Į'=>'I',
                'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'į'=>'i', 'ĩ'=>'i', 'ī'=>'i', 'ĭ'=>'i', 'ı'=>'i',
        
                'Ĵ'=>'J',
                'ĵ'=>'j',
        
                'Ķ'=>'K',
                'ķ'=>'k', 'ĸ'=>'k',
        
                'Ĺ'=>'L', 'Ļ'=>'L', 'Ľ'=>'L', 'Ŀ'=>'L', 'Ł'=>'L',
                'ĺ'=>'l', 'ļ'=>'l', 'ľ'=>'l', 'ŀ'=>'l', 'ł'=>'l',
        
                'Ñ'=>'N', 'Ń'=>'N', 'Ň'=>'N', 'Ņ'=>'N', 'Ŋ'=>'N',
                'ñ'=>'n', 'ń'=>'n', 'ň'=>'n', 'ņ'=>'n', 'ŋ'=>'n', 'ŉ'=>'n',
        
                'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ō'=>'O', 'Ŏ'=>'O', 'Ő'=>'O', 'Œ'=>'O',
                'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ō'=>'o', 'ŏ'=>'o', 'ő'=>'o', 'œ'=>'o', 'ð'=>'o', 'ở'=>'o',
        
                'Ŕ'=>'R', 'Ř'=>'R',
                'ŕ'=>'r', 'ř'=>'r', 'ŗ'=>'r',
        
                'Š'=>'S', 'Ŝ'=>'S', 'Ś'=>'S', 'Ş'=>'S',
                'š'=>'s', 'ŝ'=>'s', 'ś'=>'s', 'ş'=>'s',
        
                'Ŧ'=>'T', 'Ţ'=>'T', 'Ť'=>'T',
                'ŧ'=>'t', 'ţ'=>'t', 'ť'=>'t',
        
                'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ũ'=>'U', 'Ū'=>'U', 'Ŭ'=>'U', 'Ů'=>'U', 'Ű'=>'U', 'Ų'=>'U',
                'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ü'=>'u', 'ũ'=>'u', 'ū'=>'u', 'ŭ'=>'u', 'ů'=>'u', 'ű'=>'u', 'ų'=>'u',
        
                'Ŵ'=>'W', 'Ẁ'=>'W', 'Ẃ'=>'W', 'Ẅ'=>'W',
                'ŵ'=>'w', 'ẁ'=>'w', 'ẃ'=>'w', 'ẅ'=>'w',
        
                'Ý'=>'Y', 'Ÿ'=>'Y', 'Ŷ'=>'Y',
                'ý'=>'y', 'ÿ'=>'y', 'ŷ'=>'y',
        
                'Ž'=>'Z', 'Ź'=>'Z', 'Ż'=>'Z',
                'ž'=>'z', 'ź'=>'z', 'ż'=>'z',
        
                '“'=>'"', '”'=>'"', '‘'=>"'", '’'=>"'", '•'=>'-', '…'=>'...', '—'=>'-', '–'=>'-', '¿'=>'?', '¡'=>'!', '°'=>' degrees ',
                '¼'=>' 1/4 ', '½'=>' 1/2 ', '¾'=>' 3/4 ', '⅓'=>' 1/3 ', '⅔'=>' 2/3 ', '⅛'=>' 1/8 ', '⅜'=>' 3/8 ', '⅝'=>' 5/8 ', '⅞'=>' 7/8 ',
                '÷'=>' divided by ', '×'=>' times ', '±'=>' plus-minus ', '√'=>' square root ', '∞'=>' infinity ',
                '≈'=>' almost equal to ', '≠'=>' not equal to ', '≡'=>' identical to ', '≤'=>' less than or equal to ', '≥'=>' greater than or equal to ',
                '←'=>' left ', '→'=>' right ', '↑'=>' up ', '↓'=>' down ', '↔'=>' left and right ', '↕'=>' up and down ',
                '℅'=>' care of ', '℮' => ' estimated ',
                'Ω'=>' ohm ',
                '♀'=>' female ', '♂'=>' male ',
                '©'=>' Copyright ', '®'=>' Registered ', '™' =>' Trademark ',
            );
        
            $string = strtr($string, $table);
            // Currency symbols: £¤¥€  - we dont bother with them for now
            $string = preg_replace("/[^\x9\xA\xD\x20-\x7F]/u", "", $string);
        
            return $string;
        }
        //=======================================================
        function send_message($access_token,$message_to_reply,$sender,$input){
            //API Url
            $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;
            //Initiate cURL.
            $ch = curl_init($url);
            //The JSON data.
            $jsonData = '{
             "recipient":{
             "id":"'.$sender.'"
             },
             "message":{
             "text":"'.$message_to_reply.'"
             }
            }';
            //Encode the array into JSON.
            $jsonDataEncoded = $jsonData;
            //Tell cURL that we want to send a POST request.
            curl_setopt($ch, CURLOPT_POST, 1);
            //Attach our encoded JSON string to the POST fields.
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
            //Set the content type to application/json
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            //curl_setopt($ch, CURLOPT_HTTPHEADER, array(‘Content-Type: application/x-www-form-urlencoded’));
            //Execute the request
            if(!empty($input['entry'][0]['messaging'][0]['message'])){
                $result = curl_exec($ch);
            }
        }
        //=============================================================================
        function send_mail($to, $content){
        	$content = wordwrap($content,70);
        	$subject = "Đơn hàng";
        	$headers = "From: facebook_chatbot@master.com";
        	mail($to,$subject,$content,$headers);
        }
        //=========================================================================
        
        function auto_rep($message,$access_token,$sender,$input){
            $message = convertAccentsAndSpecialToNormal(strtolower($message));
        	$myfile = fopen("questions_answers.txt", "r") or die("Unable to open file!");
        	// Output one line until end-of-file
        	//=======================================
        	if(strlen($message)>=2){
            	if(strtolower($message[0])=="d" && strtolower($message[1])=="h"){
            		send_mail("Muoi@nhonmy.com",$message);
            		$message_to_reply = "Đơn đặt hàng của bạn đã được cập nhật thành công! Nhân viên sẽ liên hệ lại cho bạn để xác nhận sớm nhất có thể!";
            		send_message($access_token,$message_to_reply,$sender,$input);
            		fclose($myfile);
            		return;
            	}
            }
        	//=========================================
        	
        	//=======================================
        	$temp = null;
        	while(($temp = fgets($myfile))!=null) {
        		$pieces_temp = explode("|", $temp);
        		$arr_questions = explode(",",$pieces_temp[0]);
        		
        		foreach($arr_questions as $arr_questions){			
        			if (preg_match("/\b$arr_questions\b/", $message)){
        				$number_of_elements  = count($pieces_temp);
        				for($i = 1; $i <= $number_of_elements-1; $i++)
        				{
        					$arr_answers = explode("<s>", $pieces_temp[$i]); 
        					sleep((int)$arr_answers[0]); flush();
        					$message_to_reply = $arr_answers[1];
        					send_message($access_token,$message_to_reply,$sender,$input);
        				}
        
        
        				fclose($myfile);
        				return;
        			}
        		}
        	}
        	
        	
        	$message_to_reply = "mình không hiểu ý của bạn lắm!";
        	send_message($access_token,$message_to_reply,$sender,$input);
        	fclose($myfile);
        	
        	if($message==null){return;}
        	$filez = fopen("unvalid_questions.txt","a+");
	        fwrite($filez,$message."\n");
	        fclose($filez);
        }
?>