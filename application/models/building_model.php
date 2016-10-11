<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Building_model extends CI_Model
{
function __construct() 
     {
       parent::__construct(); 

     }
   public function login($email,$password)
   {
    $query = $this->db->query("SELECT * FROM user where email='$email' and  password='$password'");
    return $query->result();
   }
   public function check_forget_pass($email,$last_name)
   {
    $query = $this->db->query("SELECT * FROM user where email='$email' and  `last name`='$last_name'");
    return $query->result();
   }  
      public function add_request($param)
      {
         $this->db->insert('request',$param);
      } 
      public function user_data($id){
        $query = $this->db->query("SELECT * FROM user where id=$id");
            return $query->result();
      }

    public function update_user($data){
    $id=$this->session->userdata['logged_in']['id'] ;
    $this->db->where('id',$id );
    $this->db->update('user', $data);
    }  

    public function add_offer($param){
       $this->db->insert('offer',$param);

    }

}

?>