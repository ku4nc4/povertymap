<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public $id;
    public $fname;

    public function get_all_user_fname()
    {
        $query = $this->db->get('user');
        return $query->result();
    }
}
