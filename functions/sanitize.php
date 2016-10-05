<?php 
	#A SIMPLE FUNCTION FOR ESCAPING STRING TYPE DATA
	function escape($string){
		htmlentities($string, ENT_QUOTES, 'UTF-8');
	}
?>