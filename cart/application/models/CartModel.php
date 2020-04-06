<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class CartModel extends CI_Model {
    
     // Get all details ehich store in "products" table in database.
        public function get_all()
	{
		$query = $this->db->get('products');
		return $query->result_array();
	}
    
    
	}
       
