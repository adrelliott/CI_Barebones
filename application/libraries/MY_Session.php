<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Allows tha session update when ajax is being used
*/
class MY_Session extends CI_Session
{
	
	function sess_update()
	{
		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
		    && $_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest') {
			//This is not an ajax call
			parent::sess_update();
		}
	}
}