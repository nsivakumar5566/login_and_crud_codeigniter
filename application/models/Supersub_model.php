<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supersub_model extends CI_Model {


	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

   public function form_student()
    {
    	$inps=$this->input->post('');
    	extract($_REQUEST);

    	$sql=array(
           
           'name'=>$name,
           'gender'=>$gender,
           'country'=>$country,
           'comment'=>$comment,
           

    	);

    	$this->db->insert('student_table',$sql);

        $this->db->where();
    	$this->db->update('student_table',$sql);
        
    }

    public function studentview()
    {
    	$this->db->select('*');
    	$this->db->from('student_table');
    	$result=$this->db->get()->result_array();
    	return $result;
    }
     public function editstudent($id)
    {
    	$this->db->select('*');
    	$this->db->from('student_table');
    	$this->db->where('student_id',$id);
    	$result=$this->db->get()->result_array();
    	return $result;
    }
 

}
