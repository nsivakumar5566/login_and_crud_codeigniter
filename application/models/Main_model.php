<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {


	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

public function form_save()
{
 $mail=$this->input->post('email');
 $pass=$this->input->post('pwd');
 $gen=$this->input->post('gender');
 $coun=$this->input->post('country');
 $com=$this->input->post('comment');
 

                $config['upload_path']          = './upload/';
                $config['allowed_types']        = '*';
                //$config['max_size']             = 100;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        //print_r($error);
                        //exit;
                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $files=$data['upload_data']['file_name'];
                        //echo '<pre>';print_r($data);
                        //exit;
                        //$this->load->view('upload_success', $data);
                }


 $insert=array('email'=>$mail,'password'=>$pass,'gender'=>$gen,'country'=>$coun,'comment'=>$com,'images'=>$files);
 $this->db->insert('employee',$insert);

}

public function table_view()
{

 $sear=$this->input->post('search');

$this->db->select('*');
$this->db->from('employee');
if($sear!=''){
//$this->db->where('email','mechsiva35@gmail.com');
$this->db->like('email',$sear);
}
$result=$this->db->get();
return $result;
}
public function table_edit($id)		
{

$this->db->select('*');
$this->db->from('employee');
$this->db->where('userid',$id);
$result=$this->db->get()->result_array();
return $result;

}
public function form_update()

{
 
 $filename=$_FILES["image"]["name"];
 //print_r($filename);
 //exit;

 if($filename!='')
         {
 
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = '*';
                //$config['max_size']             = 100;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        //$this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $files=$data['upload_data']['file_name'];
                        unlink('upload/'.$_POST['imagename']);
                        //echo '<pre>';print_r($files);
                        //exit;
                        //$this->load->view('upload_success', $data);
                }
             }
             else
             {
             	$files=$this->input->post('imagename');
             }   

 $mail=$this->input->post('email');
 $pass=$this->input->post('pwd');
 $gen=$this->input->post('gender');
 $coun=$this->input->post('country');
 $com=$this->input->post('comment');
 $use=$this->input->post('user');
 
 $insert=array('email'=>$mail,'password'=>$pass,'gender'=>$gen,'country'=>$coun,'comment'=>$com,'images'=>$files);
 $this->db->where('userid',$use);
 $this->db->update('employee',$insert);
 
}
public function table_delete($id)
{
 $this->db->where('userid',$id);
 $this->db->delete('employee');
}
public function form_login()
{
    $mail=$this->input->post('email');
     $pwd=$this->input->post('password');
    $this->db->select('*');
    $this->db->from('employee');
    $this->db->where('email',$mail);
    $this->db->where('password',$pwd);
    $result=$this->db->get()->num_rows();
     return $result;
    
}

 public function out_log()
 {
     $this->session->sess_destroy();
 }
}
