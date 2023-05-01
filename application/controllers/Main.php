<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


	public function __construct()
    {
        parent::__construct();

        $this->load->model('Main_model');
         $this->load->model('Sub_model');
    }

	
	public function index()
	{
		$this->load->view('login');
	}
  



	public function saveform()

	{

	 $this->Main_model->form_save();
	 redirect(base_url('Main/welcomeview'));
	}

	public function viewtable()
	{
    $sql=$this->Main_model->table_view();
    $data=$sql->num_rows();
    $data=$sql->result_array();
    // print_r($data);
    // exit;
    $this->load->view('table_view',$data);


	}

	public function editable($id)
	{
		$data['list']=$this->Main_model->table_edit($id);
		$this->load->view('edit',$data);
	}
	public function updateform()
	{
      $this->Main_model->form_update();
      redirect(base_url('Main/viewtable'));
	}
	public function deletetable($id)
	{
     
     $this->Main_model->table_delete($id);
     redirect(base_url('Main/viewtable'));

	}

	public function viewform()
	{
		$this->load->view('form');
	}

   public function welcomeview()
   { 
   	 $session=$this->session->userdata('customermail');
      if($session!=''){
      $this->load->view('welcome');
       }
       else
       {
       	redirect(base_url());
       }

   }

   public function loginform()
   {
    
     $data=$this->Main_model->form_login();

    if($data==1)
    {
        $mail=$this->input->post('email');
        $this->session->set_userdata('customermail',$mail);
        echo'<script> alert("logged sucessfully");
         window.location="'.base_url('Main/welcomeview').'" </script>';
       

    }
    else
    {
        echo"username password is incorect";
    }

   }

   public function logout()
   {
   	  $this->session->sess_destroy();
   	  redirect(base_url());
   }
}
