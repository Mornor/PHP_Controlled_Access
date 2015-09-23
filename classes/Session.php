<?php
class Session {
	public static function put($name, $value){
		return $_SESSION[$name] = $value;  
	}

	public static function exists($token){
		return isset($_SESSION[$token]) ? true : false; 
	}

	public static function get($name){
		return $_SESSION[$name]; 
	}

	public static function delete($token){
		if(self::exists($token)){
			unset($_SESSION[$token]); 
		}
	}

	public static function flash($name, $string = ''){
		if(self::exists($name)){
			$session = self::get($name); 
			self::delete($name); 
			return $session; 
		} else {
			self::put($name, $string); 
		}
	}
}