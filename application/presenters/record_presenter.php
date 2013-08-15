<?php

/* acts as thin layer between model & view.
 * Means we can access the model via the view, using an object
 * 
 * e.g. Line in view file may look like:
 * 
 * <p>First name of this contact is <? echo ${object}->first_name ?></p>
 * 
 * NOTE: {Object} is set in the 'show()' method of the controller 
 */


    class Record_Presenter extends Presenter {
       
        
        
        public function all_records_by($model_name, $array = array()) {
            //If not arraynis passed, call the all_records() method
            if (! count($array)) return $this->all_records ($model_name);
            
            //Otherwise, set the creiteria and fetch the data
            $this->db->where($array);
            return $this->$model_name->get_many_by();
        }
        
        public function all_contacts_records($model_name, $where = array()) {
            //$retval = array();
            
            //set the where
            //$where = array_merge (array ('cID' => $this->cID), $where);
            //$where = array(array('cID', $this->cID));
            //die('cid = ' .$this->cID);
            $this->db->where('cID', $this->cID);
            return $this->$model_name->get_many_by();
        }
        
       
        
        public function col_val($col_name) {
            //is it set?
            if (isset($this->record->$col_name)) return $this->record->$col_name;
        }
        
        public function sort_by($model_name, $criteria, $order = 'ASC') {
            $this->$model_name->order_by($criteria, $order);
        }
        
    }