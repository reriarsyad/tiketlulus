<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Core_Model');
    }
    
    public function register()
    {
        $last_id = $this->db->get(user)->num_rows();

        $id = $last_id + 1;

        $data = array(
            'id'=> $id,
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'fullname' => $this->input->post('fullname'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'gender' => $this->input->post('gender')
            // 'level' => $level 
            );
        $data = $this->Core_Model->register('user', $data);
        redirect(base_url("admin/user"),'refresh');
    }

	public function success()
	{			
		$this->load->view('template/style');
		$this->load->view('template/header');
		$this->load->view('public/v_regsuccess');
		$this->load->view('template/footer');
    }

    public function edit($id)
    {
       $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'fullname' => $this->input->post('fullname'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'gender' => $this->input->post('gender')
            // 'level' => $level 
            );

        $this->db->where('id', $id);
        $data = $this->db->update('user', $data);
        //$this->Core_Model->update('user', $data, array('id'=>$id));

        redirect(base_url("admin/user"),'refresh');
    }
    
    public function hapusUser($id)
    {   
        $this->Core_Model->delete('user', array( 'id' => $id));
        redirect(base_url('admin/user'), 'refresh');
    }
}
