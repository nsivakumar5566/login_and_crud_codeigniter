<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supermain extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
    $this->load->model('Supersub_model');
      
    }

    public function studentform()
    {
    	$data=$this->Supersub_model->form_student();
    	echo json_encode($data);
    }
public function insertform()
{
    $data['list']=$this->Supersub_model->studentview();
    $this->load->view('studentform',$data);
	
}

public function studentedit($id)
{  
	//print_r($id);
	//exit;
	$data =$this->Supersub_model->editstudent($id);
	//print_r($data);
	//exit;
	echo json_encode($data);
}

}
