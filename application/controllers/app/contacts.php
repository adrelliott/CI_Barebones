<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends MY_Controller {

	//List the models to load with this controller (needs Jamie Rumblow MY_Model)
    protected $models = array('contact');
    
    //Set this to set default cols on on ajax output
    //public $ajax_field_list = array('first_name', 'last_name');
    
    //Set up an indidivual presenter here
    //protected $presenter = FALSE;
    
    //Set up a layout here
   //protected $layout_filename = 'ajax';  //set a specific layout (default=app)

    
    public function __construct() {
        parent::__construct();

        //require_once APPPATH . 'presenters/record_presenter.php';
    }

	public function index() {
		dump($this->contact->get_all());
		//echo '<p>This the contacts page in the app</p><span>Don\'t forget, controllers are plural...';
		//dump($this->data);
	}

	public function show($id = 'new') {
		//$this->load->model('contact_model');
		$contact = $this->contact->get($id);
		dump($contact);

		//set up an object of the contact record
		//$contact_record = $this->post->get($id);
		//$contact_record = new Contact_Presenter($contact_record);
	}

	public function edit($id = 'new') {
		if ($id === 'new') return $this->create();
		//if record_id ==== 'new' then create a record, otherwise edit record with id = record_id

	} 

	public function create() {

	} 

	public function delete($id) {

	} 



}

/* End of file contacts.php */
/* Location: ./application/controllers/app/contacts.php */