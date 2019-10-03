<?php
	class Token {
		public static function generate_token($session_id){
			$token = sha1($session_id);

			setcookie("csrf", $token);			
		}

		public static function check_token($token){
			if(isset($_COOKIE["csrf"]) && $token === $_COOKIE["csrf"]){
				return true;
			}	
			else{
				return false;
			}
		}
	}
?>


