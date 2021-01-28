<?php


class MY_Form_validation extends CI_Form_validation {

    protected $CI;

    function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
    }

    public function _uniqe_email($str)
      {
        $id = $this->uri->segment(4);
        $this->db->where('email', $this->input->post('email'));
        !$id || $this->db->where('id !=', $id);
        $user = $this->user_m->get();

        if(count($user)){
          $this->form_validation->set_message('_unique_email', '%s should be uniqe.');
          return FALSE;
        }

        return TRUE;

      }
}