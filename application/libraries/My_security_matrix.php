<?php if (!defined('BASEPATH')) exit('No direct script access allowed.');
class My_security_matrix{
	
	function hasAccess($accessMatrix){
		if($accessMatrix=='1' || $accessMatrix=='3')
			return TRUE;
		return FALSE;
	}
	
	function canModify($accessMatrix){
		if($accessMatrix=='3')
			return TRUE;
		return FALSE;
	}
	
	
}//mail class
?>
