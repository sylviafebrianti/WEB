<?php
class user_model extends CI_Model{
	public $username;
	public $password;
	
	//public $labels = [];
	
	//public function __construct(){
		//parent::__construct();
	//	$this->labels = $this->attribut_labels();
	//}
	public function aunthentikasi(){
		if(isset($this->username) && isset($this->password)){
			if ($this->username=== 'demo' && $this->password === 'demo'){
				return TRUE;
			}else{
				return FALSE;
			}
		}else{
			return FALSE;
		}
	}
	//public function attribut_labels(){
		//return['username'=>'Username:','password'=>'Password:'];
	//}
}
?>