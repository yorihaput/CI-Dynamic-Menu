<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_acl extends CI_Model {
    
    public function _acl_menu($level, $menu_type = 'sidebar_menu')
	{
		$this->db->where("$level", "any(level)",false)
				 ->where('status', 1)
				 ->where('type', $menu_type)
				 ->order_by('position');
		return $this->db->get('_acl')->result();
	}

}

/* End of file M_acl.php */
/* Location: ./application/models/M_acl.php */