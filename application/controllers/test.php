<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		echo "test";
		$browser = new Buzz\Browser();
		$response = $browser->get('http://www.google.com');

		echo $browser->getLastRequest()."\n";
		echo $response;

		
	}

}

/* End of file test.php */
/* Location: ./application/controllers/test.php */