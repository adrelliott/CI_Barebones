<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Contacts
 * @author Al Elliott
 * Table Name: contacts
 * 
 * Description goes here
 * 
 */
class Contact_model extends MY_Model {

    protected $_table = 'contacts';


    //Define vars used throught the process
    //public $table_name = 'contacts';
    //public $condition = array('flag_crm_user !=' => 1);
    //public $cols = array(
   //     'id', 'first_name'
    //    );

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here

    public function __construct() {
        parent::__construct();
    }
    
    public function get2() {
        return $this->db->get('contacts');
    }

}

/* End of file contacts_model.php */
/* Location: ./application/models/contacts_model.php */