<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_model extends CI_Model {


	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

   public function form_product()
   {
      $nam=$this->input->post('name');
      $cit=$this->input->post('city');
       $use=$this->input->post('user');
     //print_r('shgrgfr');
     //exit;
      $insert=array('name'=>$nam,'city'=>$cit);
      if($use!=''){
        $this->db->where('siva_id',$use);
      $this->db->update('siva_table',$insert);
      }
      else
      {
        $this->db->insert('siva_table',$insert);
      }
      
   }

   public function view_pro()

   {
    $this->db->select('*');
    $this->db->from('siva_table');
    $result=$this->db->get()->result_array();
    return $result; 
   }

   public function edit_product($id)

   {
     
     $this->db->select('*');
    $this->db->from('siva_table');
    $this->db->where('siva_id',$id);
    $result=$this->db->get()->result_array();
    return $result; 
   }
  
public function data_delete($id)
{
  $this->db->where('siva_id',$id);
 $this->db->delete('siva_table');
}


}
