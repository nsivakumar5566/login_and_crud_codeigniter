<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submain extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
   
      $this->load->model('Sub_model');
      
    }

public function productform()

  {
    $data=$this->Sub_model->form_product();
    //print_r($data);
    //exit;
    echo json_encode($data);
  }


  public function sivaview()
  {
    $data['list']=$this->Sub_model->view_pro();
    $this->load->view('sivaform',$data);

  }

  Public function productedit($id)
  {
    //print_r($id);
    //exit;
    $data=$this->Sub_model->edit_product($id);
    //print_r($data);
    //exit;
      echo json_encode($data);
  }

public function deletedata($id)
{
  
  $data=$this->Sub_model->data_delete($id);
  echo json_encode($data);

}

  

}
