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
    public function check_email($email){
        $query = $this->db->query("SELECT * FROM user where email='$email'");
        return $query->result();
    }
    public function register($param)
      {
         $this->db->insert('user',$param);
      }
   public function search_request1($city,$category,$limit, $start)  {
    $this->db->limit($limit, $start);


// $where = "(city='$city' AND category='$category' AND delete_post=0)";
// $this->db->where($where);

$array = array('city' => $city, 'category' => $category, 'delete_post' => 0);

$this->db->where($array); 
    // $this->db->where('city',$city);
    // $this->db->where('category',$category);
    // $this->db->where('delete_post',0);
    $query=$this->db->get('offer');
    // print_r($query);exit();
    $data= array();
        if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return $data;
  

   }
public function all_result_count($city,$category){
$query = $this->db->where('city', $city)->where('delete_post',0)->where('category',$category)->get('offer');
return $query->num_rows();
}
public function search_request2($sql){
  // var_dump($sql);exit();
//$this->db->limit($start, $limit);
$query = $this->db->query($sql);
// $query= $query->result();
  $data= array();
        if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
              // var_dump($data);exit();
                return $data;
            }
            return $data;


}
public function city_search(){
 $query = $this->db->query("SELECT * FROM city ORDER by name");
 return $query->result();
}
public function offer_details($id){
    // $this->db->where('id',$id);
    // $query=$this->db->get('offer');
    //  $data= array();
    //     if ($query->num_rows() > 0) {
    //             foreach ($query->result() as $row) {
    //                 $data[] = $row;
    //             }
    //             return $data;
    //         }
    //         return $data;

  $query = $this->db->query("SELECT o.*,u.`first_name`,u.`last_name` FROM offer as o,user as u where o.`id`=$id and o.`user_id`=u.`id`");
  return $query->result();
}
public function all_result_count2($sql_count){
  $query = $this->db->query("$sql_count");
  return $query->result();
}
public function user_offer($id){
   $query = $this->db->query("SELECT * FROM offer where user_id='$id' and delete_post=0");
   return $query->result();
}
public function user_request($id){
   $query = $this->db->query("SELECT * FROM request where user_id='$id' and delete_post=0");
   return $query->result();
}
public function deactive_request($id,$param){
    $this->db->where('id',$id );
    $this->db->update('request', $param);
}
public function active_request($id,$param){
    $this->db->where('id',$id );
    $this->db->update('request', $param);
}
public function deactive_offer($id,$param){
    $this->db->where('id',$id );
    $this->db->update('offer', $param);
}
public function active_offer($id,$param){
    $this->db->where('id',$id );
    $this->db->update('offer', $param);
}
public function delete_offer($id,$param){
    $this->db->where('id',$id );
    $this->db->update('offer', $param);
}
public function delete_request($id,$param){
    $this->db->where('id',$id );
    $this->db->update('request', $param);
}
}

?>