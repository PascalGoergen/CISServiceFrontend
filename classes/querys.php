<?php
	class querys{
		// User Querys
		public static function checkUser($cis_nummer){
			$cis_nummer = htmlspecialchars($cis_nummer);
			$query = mysql_query("SELECT * FROM users WHERE cis_number = $cis_nummer");
			$amount = 0;
			if(!empty($query)){
				$amount = mysql_num_rows($query);		
			}
			if($amount == 0 || empty($amount)){
				return false;
			}else{
				return true;
			}
		}
		
		public static function checkModul($modulnr){
			$query = mysql_query("SELECT * FROM curriculum WHERE modulnr = '$modulnr'");
			$amount = 0;
			if(!empty($query)){
				$amount = mysql_num_rows($query);		
			}
			if($amount == 0 || empty($amount)){
				return false;
			}else{
				return true;
			}
		}
		
		public static function addModul($subject,$creditpoints,$modulnr){
			$query = mysql_query("INSERT INTO curriculum VALUES ('$subject','$creditpoints','$modulnr')");
			if(!$query){
				echo "Error adding module.";
			}
		}
	}
?>