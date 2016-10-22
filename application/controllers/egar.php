<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Header('Content-Type: text/html; charset=UTF-8');

class egar extends CI_Controller {

      function __construct() 
       {
         parent::__construct();
         $this->load->database();
         $this->load->model('Building_model');
         $this->load->helper(array('form', 'url'));
         $this->load->library('form_validation');
         $this->load->library('session');
         $this->load->library("pagination");


       } 
	public function index()
	{
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        switch ($lang){
            case "ar":
                $this->load->view('ar/test');
                break;
            case "en":
              $data['result']=$this->Building_model->city_search();

                $this->load->view('en/index',$data);
                break;        
            default:
               $data['result']=$this->Building_model->city_search();

                $this->load->view('en/index',$data);    
             break;

              }

	}
  // public function search(){
  //   $this->load->view('en/search');
  // }

  public function createad(){
    $this->load->view('en/create-ad');
  }


  public function login(){
        //Retrieve session data 
        $session_set_value = $this->session->all_userdata();
        // Check for remember_me data in retrieved session data
        if (isset($session_set_value['remember_me']) && $session_set_value['logged_in'] &&$session_set_value['remember_me'] == "1") {
            //$this->load->view('en/index');
            echo"success";
            } 
        else {
            
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $result =$this->Building_model->login($email,$password);

                if ($result!=null) {
                    $remember = $this->input->post('remember_me');
                    if ($remember) {

                        // Set remember me value in session  
                   $this->session->set_userdata('remember_me', TRUE);
                    // $sess_data = array(
                    //     'id' => $result[0]->id,
                    //     'email' => $result[0]->email,
                    //     'password' => $result[0]->password,
                    //     'first_name' => $result[0]->first_name
                    // );

                    // $this->session->set_userdata('logged_in', $sess_data);
                    }
                    $sess_data = array(
                        'id' => $result[0]->id,
                        'email' => $result[0]->email,
                        'password' => $result[0]->password,
                        'first_name' => $result[0]->first_name,
                        'gender'=> $result[0]->gender
                    );

                    $this->session->set_userdata('logged_in', $sess_data);
                    $data['result']=$this->Building_model->city_search();

                $this->load->view('en/index',$data);
                        // $id=$this->session->userdata['logged_in']['id'] ;
                        // echo $id;
                    echo "success";

                } else {
                         echo 'error';
                    
                    //$this->load->view('en/index', $data);
                }
            }
        }
    
    //register
    public function register(){
      
      $param['gender']=$gender=$this->input->post('title');
      $param['first_name']=$first_name=$this->input->post('first_name');
      $param['last_name']=$this->input->post('last_name');
      $param['email']=$email = $this->input->post('email');
      $param['password']=$password = $this->input->post('password');
      $repassword= $this->input->post('repassword');

      if($password==$repassword)
      {
       $result =$this->Building_model->check_email($email);
           if ($result!=null)
                {
                      echo "email already exist";
                }
           else {
                       $this->Building_model->register($param);
                       $result =$this->Building_model->get_id($email);

                       $sess_data = array(
                        'id'=>$result[0]->id,
                        'email' => $email,
                        'password' => $password,
                        'first_name' => $first_name,
                        'gender'=> $gender
                    );

                    $this->session->set_userdata('logged_in', $sess_data);
                       echo "you are successfully registered";

                }
      }
      else
      {
        echo "password and repassword are not the same ";
      }

    }
    // Logout 
    public function logout() {

        // Destroying session data
        $this->session->sess_destroy();
       // $this->load->view('en/index');
        redirect('egar'); 
    }
    public function profile(){
      if($id=$this->session->userdata('logged_in'))
      {
        $id=$this->session->userdata['logged_in']['id'] ;
        $data['result']=$this->Building_model->user_data($id);
        $data['offer']=$this->Building_model->user_offer($id);
        $data['request']=$this->Building_model->user_request($id);
        $this->load->view('en/profile',$data);
      }
      else
      {
$data['result']=$this->Building_model->city_search();

                $this->load->view('en/index',$data);      }

    }
    public function forget_pass(){
     $this->load->view('en/forget_pass');

    }
    public function admin(){
     $this->load->view('en/home');
    }
    public function check_forget_pass(){
         $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean|valid_email');
            $this->form_validation->set_rules('last_name', 'last_name', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('en/forget_pass');
            } else {
                $email = $this->input->post('email');
                $last_name = $this->input->post('last_name');
                $result =$this->Building_model->check_forget_pass($email,$last_name);
                if ($result!=null) {
                    $this->load->view('en/home');

                }
                else{
                    $data = array(
                        'error_message' => 'Invalid email or Password'
                    );
                    $this->load->view('en/forget_pass', $data);
                }
    }

}

public function city_search(){
  $val = $this->input->post('keyword');
  //print_r($val);exit();
  if($val){
  $result=$this->Building_model->city_search();
  // print_r($result);

  if($result){
//    echo' <ul id="country-list">';
//    foreach($result as $country) {
//    echo "<li onClick='selectCountry('$country->name')>";
//     echo $country->name;
//     echo"</li>";
//  } 
// echo"</ul>";



echo"<ul id='country-list'>";
foreach($result as $country) {

  echo'<li onClick="selectCountry("'.$country->name.'")">';
  echo $country->name."</li>";
 } 
echo"</ul>";
  }
  }
}
public function search()
{
    $type = $this->input->post('type');//offer 1 & request 2
    $city =$data['city']= $this->input->post('city');
    $category=$data['category']= $this->input->post('category');



    $config["base_url"] = base_url() . "egar/search";
    $config["total_rows"]= $this->Building_model->all_result_count($city,$category);
    $config["per_page"] = 3;
    $config["uri_segment"] = 3;
    $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = round($choice);

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
    // $data["mail_list"] = $this->Building_model
    //     ->mail_list($config["per_page"], $page);
    $data["links"] = $this->pagination->create_links();



    if($type==1)
     {
      $data['type']="offer";
      $data['result']=$result=$this->Building_model->search_offer1($city,$category,$config["per_page"], $page);


        $search_offer1 = array(
                        'city' => $city,
                        'category' => $category
                    );

       $this->session->set_userdata('search_offer1', $search_offer1);
       $this->session->set_userdata('result', $result);
      $data['city']=$this->Building_model->city_search();
      $this->load->view('en/search_offer',$data);
      }
    else
    {
     $data['type']="request";
     $data['result']=$result=$this->Building_model->search_request1($city,$category,$config["per_page"], $page);

     $search_request1 = array(
                        'city' => $city,
                        'category' => $category
                    );

       $this->session->set_userdata('search_request1', $search_request1);
       $this->session->set_userdata('result', $result);     
      $data['city']=$this->Building_model->city_search();
     $this->load->view('en/search_request',$data);
    }
}





public function request(){
  $param['result']=$this->Building_model->city_search();
  $this->load->view('en/CreateRequest',$param);

}
public function request2(){
    $param['building_type'] = $this->input->post('building_type');
    $param['city'] = $this->input->post('city');
    $param['period'] = $this->input->post('period');

    $id=$this->session->userdata['logged_in']['id'] ;
    $param['user_data'] =$this->Building_model->user_data($id);


   $this->load->view('en/CreateRequest-2',$param);

}

public function search_request2(){


$query = "SELECT * FROM offer";
$query_count = "SELECT count(*)as count FROM offer";

$conditions = array();

$category=$this->input->post('category');
$city=$this->input->post('city');
$rent_type=$this->input->post('rent_type');
$total_flat_size=$this->input->post('total_flat_size');
$rent_per_month=$this->input->post('max_rent');
$e_move_in=$this->input->post('e_move_in');
$l_move_in=$this->input->post('l_move_in');
$gender=$this->input->post('gender');
$smoke=$this->input->post('smoke');
$age_from=$this->input->post('age_from');
$age_to=$this->input->post('age_to');
$room_from=$this->input->post('room_from');
// $room_to=$this->input->post('room_to');

if($category !="" || $city !="") {
      $conditions[] = "(category='$category' and city='$city')";
    }
// if($city !="") {
//       $conditions[] = "city='$city'";
//     }
if($rent_type !="") {
      $conditions[] = "rent_type='$rent_type'";
    }
if($total_flat_size !="") {
      $conditions[] = "total_flat_size >= '$total_flat_size'";
    }
if($rent_per_month !="") {
      $conditions[] = "rent_per_month <= '$rent_per_month'";
    } 
    
if($e_move_in !="") {

$date = explode('-', $e_move_in);
$year = $date[0];
$month   = $date[1];
$day  = $date[2];

 $conditions[] = "(available_from_d='$day'and available_from_m='$month' and available_from_y='$year')";
    }
if($l_move_in !="") {
      
$date = explode('-', $l_move_in);
$year = $date[0];
$month   = $date[1];
$day  = $date[2];

 $conditions[] = "(available_to_d='$day'and available_to_m='$month' and available_to_y='$year')";
    }
if($gender !="") {
      $conditions[] = "searching_for='$gender'";
    }
if($smoke !="") {
       if($smoke=="No")
         {
           $conditions[] = "smoking =='No smoking'";
         }
       else
         {
           $conditions[] = "smoking !='No smoking'";
         }
    }
if($age_from !="") {
      $conditions[] = "age_from='$age_from'";
    }

 if($age_to !="") {
      $conditions[] = "age_to='$age_to'";
    }
 if($room_from !="")
    {
     if($room_from=="any"){}
     else{ $conditions[] = "number_of_rooms='$room_from'";}
    }
 $sql = $query;
 $sql_count=$query_count;
 if (count($conditions) > 0) {
      $sql_count .= " WHERE " . implode(' OR ', $conditions);
    
    }
  //////pagination
    // $config["base_url"] = base_url() . "egar/search_request2";
    // $config["total_rows"]=$t= $this->Building_model->all_result_count2($sql_count)[0]->count;
    // $config["per_page"]=$start = 1;
    // $config["uri_segment"] = 3;
    // $choice = $config["total_rows"] / $config["per_page"];
    // $config["num_links"] = round($choice);
    // $this->pagination->initialize($config);
    // $limit=$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
    // $data["links"] = $this->pagination->create_links();
      $data["links"] ="";
    if (count($conditions) > 0) {
      $sql .= " WHERE " . implode(' and ', $conditions);
      $sql.=" and (delete_post=0)";
      //$sql .= 'LIMIT '.$config["per_page"] .','.$page;
      //$sql .= "LIMIT ". $config["per_page"] ." OFFSET ". $page ;

    }
     $data['result']=$this->Building_model->search_request2($sql);
   // print_r($result);
   $search_request1 = array(
                        'city' => $city,
                        'category' => $category
                    );

       $this->session->set_userdata('search_request1', $search_request1);
             $data['city']=$this->Building_model->city_search();

      $this->load->view('en/search_request',$data);

}
public function offer_details(){
  $id = $this->uri->segment(3);
  $data['result']=$this->Building_model->offer_details($id);
  //print_r($result);
  $this->load->view('en/offer_page',$data);

  
}

public function deactive_request(){
   $id = $this->input->post('id');
   $param['deactive']=1;
   $this->Building_model->deactive_request($id,$param);
}
public function active_request(){
   $id = $this->input->post('id');
   $param['deactive']=0;
   $this->Building_model->deactive_request($id,$param);
}
public function deactive_offer(){
   $id = $this->input->post('id');
   // var_dump($id);exit();
   $param['deactive']=1;
   $this->Building_model->deactive_offer($id,$param);
}
public function active_offer(){
   $id = $this->input->post('id');
   $param['deactive']=0;
   $this->Building_model->active_offer($id,$param);
}
public function delete_offer(){
   $id = $this->input->post('id');
   $param['delete_post']=1;
   $this->Building_model->delete_offer($id,$param);
}
public function delete_request(){
   $id = $this->input->post('id');
   $param['delete_post']=1;
   $this->Building_model->delete_request($id,$param);
}
///////////////////////////////?

  public function upload_image($var) {
        $Empphoto = NULL;
        $config['upload_path'] = './_/images/ads';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
    // $config['max_size']='3072000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($var)) {
            $error = array('error' => $this->upload->display_errors());
            // echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            $Empphoto = $data['file_name'];
        }
        return $Empphoto; //return to function Done uploading
    }



public function add_request()
{
    $var="img";
    $param['image'] = $this->upload_image($var);
    $param['user_id'] = $this->session->userdata['logged_in']['id'];
    $param['user_gender'] = $this->session->userdata['logged_in']['gender'];

    $param['category'] = $this->input->post('building_type');
    $param['city'] = $this->input->post('city_request');
    $param['rent_type'] = $this->input->post('period');

    $param['add_text'] = $this->input->post('desc');
    $param['title'] = $this->input->post('title');
    $param['from_day'] = $this->input->post('from_day');
    $param['from_month'] = $this->input->post('from_month');
    $param['from_year'] = $this->input->post('from_year');

    $param['until_day'] = $this->input->post('to_day');
    $param['until_month'] = $this->input->post('to_month');
    $param['until_year'] = $this->input->post('to_year');

    $param['max_rent'] = $this->input->post('max_rent');
    
    $param['min_room_size'] = $this->input->post('room_size');
    $param['house_type'] = $this->input->post('building_status');
    $param['Desired_Number_of_rooms'] = $this->input->post('Desired_Number_of_rooms');
    $param['Desired_Number_of_rooms_to'] = $this->input->post('Desired_Number_of_rooms_to');


    $param['house_type'] = $this->input->post('House_type');

       if($this->input->post('furnished') == "") 
       { $param['furnished']=0; }
    else
       { $param['furnished'] = $this->input->post('furnished'); }

       if($this->input->post('unfurnished') == "") 
       { $param['unfurnished']=0; }
    else
       { $param['unfurnished'] = $this->input->post('unfurnished'); }

       if($this->input->post('with_a_kitchen') == "") 
       { $param['with_a_kitchen']=0; }
    else
       { $param['with_a_kitchen'] = $this->input->post('with_a_kitchen'); }

       if($this->input->post('garden') == "") 
       { $param['garden']=0; }
    else
       { $param['garden'] = $this->input->post('garden'); }

       if($this->input->post('parking_spot') == "") 
       { $param['parking_spot']=0; }
    else
       { $param['parking_spot'] = $this->input->post('parking_spot'); }


       if($this->input->post('dishwasher') == "") 
       { $param['dishwasher']=0; }
    else
       { $param['dishwasher'] = $this->input->post('dishwasher'); }


       if($this->input->post('balcony') == "") 
       { $param['balcony']=0; }
    else
       { $param['balcony'] = $this->input->post('balcony'); }

       if($this->input->post('bathtub') == "") 
       { $param['bathtub']= 0; }
    else
       { $param['bathtub'] = $this->input->post('bathtub'); }

       if($this->input->post('elevator') == "") 
       { $param['elevator']=0; }
    else
       { $param['elevator'] = $this->input->post('elevator'); }

       if($this->input->post('terrace') == "") 
       { $param['terrace']=0; }
    else
       { $param['terrace'] = $this->input->post('terrace'); }

       if($this->input->post('bathroom_with_window') == "") 
       { $param['bathroom_with_window']=0; }
    else
       { $param['bathroom_with_window'] = $this->input->post('bathroom_with_window'); }

       if($this->input->post('pets_allowed') == "") 
       { $param['pets_allowed']=0; }
    else
       { $param['pets_allowed'] = $this->input->post('pets_allowed'); }

    $param['flatshare_size'] = $this->input->post('Flatshare_Size');
    $param['flatmates'] = $this->input->post('flatmates');

    $param['flatmates_age_group'] = $this->input->post('flatmates_age_group');
    $param['flatmates_age_group_to'] = $this->input->post('flatmates_age_group_to');


    if($this->input->post('any') == "") 
       { $param['any']=0; }
    else
       { $param['any'] = $this->input->post('any'); }

    if($this->input->post('students_only') == "") 
       { $param['students_only']=0; }
    else
       { $param['students_only'] = $this->input->post('students_only'); }

    if($this->input->post('mixed_gender') == "") 
       { $param['mixed_gender']=0; }
    else
       { $param['mixed_gender'] = $this->input->post('mixed_gender'); }

      if($this->input->post('female_only') == "") 
       { $param['female_only']=0; }
    else
       { $param['female_only'] = $this->input->post('female_only'); }


    if($this->input->post('workers_only') == "") 
       { $param['workers_only']=0; }
    else
       { $param['workers_only'] = $this->input->post('workers_only'); }

    if($this->input->post('business_people') == "") 
       { $param['business_people']=0; }
    else
       { $param['business_people'] = $this->input->post('business_people'); }

    if($this->input->post('50') == "") 
       { $param['50']=0; }
    else
       { $param['50'] = $this->input->post('50'); }

    if($this->input->post('party') == "") 
       { $param['party']=0; }
    else
       { $param['party'] = $this->input->post('party'); }

    if($this->input->post('male_only') == "") 
       { $param['male_only']=0; }
    else
       { $param['male_only'] = $this->input->post('male_only'); }

        if($this->input->post('seniors_only') == "") 
       { $param['seniors_only']=0; }
    else
       { $param['seniors_only'] = $this->input->post('seniors_only'); }

     if($this->input->post('varied_age') == "") 
       { $param['varied_age']=0; }
    else
       { $param['varied_age'] = $this->input->post('varied_age'); }


     if($this->input->post('vegetarian') == "") 
       { $param['vegetarian']=0; }
    else
       { $param['vegetarian'] = $this->input->post('vegetarian'); }


     if($this->input->post('with_children') == "") 
       { $param['with_children']=0; }
    else
       { $param['with_children'] = $this->input->post('with_children'); }


    if($this->input->post('room_for_help') == "") 
       { $param['room_for_help']=0; }
    else
       { $param['room_for_help'] = $this->input->post('room_for_help'); }

    if($this->input->post('Residential_Home') == "") 
       { $param['Residential_Home']=0; }
    else
       { $param['Residential_Home'] = $this->input->post('Residential_Home'); }


    if($this->input->post('Permission_for') == "") 
       { $param['Permission_for']=0; }
    else
       { $param['Permission_for'] = $this->input->post('Permission_for'); }

   if($this->input->post('Gym') == "") 
       { $param['Gym']=0; }
    else
       { $param['Gym'] = $this->input->post('Gym'); }


    if($this->input->post('American_Football') == "") 
       { $param['American_Football']=0; }
    else
       { $param['American_Football'] = $this->input->post('American_Football'); }


    if($this->input->post('Beach_Volleyball') == "") 
       { $param['Beach_Volleyball']=0; }
    else
       { $param['Beach_Volleyball'] = $this->input->post('Beach_Volleyball'); }


    if($this->input->post('Handball') == "") 
       { $param['Handball']=0; }
    else
       { $param['Handball'] = $this->input->post('Handball'); }


    if($this->input->post('Cycling') == "") 
       { $param['Cycling']=0; }
    else
       { $param['Cycling'] = $this->input->post('Cycling'); }


    if($this->input->post('Skateboarding') == "") 
       { $param['Skateboarding']=0; }
    else
       { $param['Skateboarding'] = $this->input->post('Skateboarding'); }


    if($this->input->post('Dancing') == "") 
       { $param['Dancing']=0; }
    else
       { $param['Dancing'] = $this->input->post('Dancing'); }

    if($this->input->post('Water_Polo') == "") 
       { $param['Water_Polo']=0; }
    else
       { $param['Water_Polo'] = $this->input->post('Water_Polo'); }


    if($this->input->post('Snowboarding') == "") 
       { $param['Snowboarding']=0; }
    else
       { $param['Snowboarding'] = $this->input->post('Snowboarding'); }


    if($this->input->post('Badminton') == "") 
       { $param['Badminton']=0; }
    else
       { $param['Badminton'] = $this->input->post('Badminton'); }



    if($this->input->post('Billards') == "") 
       { $param['Billards']=0; }
    else
       { $param['Billards'] = $this->input->post('Billards'); }


    if($this->input->post('Hockey') == "") 
       { $param['Hockey']=0; }
    else
       { $param['Hockey'] = $this->input->post('Hockey'); }

    if($this->input->post('Horse_riding') == "") 
       { $param['Horse_riding']=0; }
    else
       { $param['Horse_riding'] = $this->input->post('Horse_riding'); }

    if($this->input->post('Skiing') == "") 
       { $param['Skiing']=0; }
    else
       { $param['Skiing'] = $this->input->post('Skiing'); }

    if($this->input->post('Tennis') == "") 
       { $param['Tennis']=0; }
    else
       { $param['Tennis'] = $this->input->post('Tennis'); }


    if($this->input->post('Running') == "") 
       { $param['Running']=0; }
    else
       { $param['Running'] = $this->input->post('Running'); }    


    if($this->input->post('Ballet') == "") 
       { $param['Ballet']=0; }
    else
       { $param['Ballet'] = $this->input->post('Ballet'); }

    if($this->input->post('Boxing') == "") 
       { $param['Boxing']=0; }
    else
       { $param['Boxing'] = $this->input->post('Boxing'); }


    if($this->input->post('Martial_Arts') == "") 
       { $param['Martial_Arts']=0; }
    else
       { $param['Martial_Arts'] = $this->input->post('Martial_Arts'); }


    if($this->input->post('Rugby') == "") 
       { $param['Rugby']=0; }
    else
       { $param['Rugby'] = $this->input->post('Rugby'); }


    if($this->input->post('Squash') == "") 
       { $param['Squash']=0; }
    else
       { $param['Squash'] = $this->input->post('Squash'); }


    if($this->input->post('Table_Tennis') == "") 
       { $param['Table_Tennis']=0; }
    else
       { $param['Table_Tennis'] = $this->input->post('Table_Tennis'); }


    if($this->input->post('Football') == "") 
       { $param['Football']=0; }
    else
       { $param['Football'] = $this->input->post('Football'); }


    if($this->input->post('Basketball') == "") 
       { $param['Basketball']=0; }
    else
       { $param['Basketball'] = $this->input->post('Basketball'); }


    if($this->input->post('Ice_Hockey') == "") 
       { $param['Ice_Hockey']=0; }
    else
       { $param['Ice_Hockey'] = $this->input->post('Ice_Hockey'); }

    if($this->input->post('Climbing') == "") 
       { $param['Climbing']=0; }
    else
       { $param['Climbing'] = $this->input->post('Climbing'); }


    if($this->input->post('Swimming') == "") 
       { $param['Swimming']=0; }
    else
       { $param['Swimming'] = $this->input->post('Swimming'); }


    if($this->input->post('Surfing') == "") 
       { $param['Surfing']=0; }
    else
       { $param['Surfing'] = $this->input->post('Surfing'); }

    if($this->input->post('Volleyball') == "") 
       { $param['Volleyball']=0; }
    else
       { $param['Volleyball'] = $this->input->post('Volleyball'); }


    if($this->input->post('Electro') == "") 
       { $param['Electro']=0; }
    else
       { $param['Electro'] = $this->input->post('Electro'); }


    if($this->input->post('Alternative') == "") 
       { $param['Alternative']=0; }
    else
       { $param['Alternative'] = $this->input->post('Alternative'); }


    if($this->input->post('Grunge') == "") 
       { $param['Grunge']=0; }
    else
       { $param['Grunge'] = $this->input->post('Grunge'); }

    if($this->input->post('Classical') == "") 
       { $param['Classical']=0; }
    else
       { $param['Classical'] = $this->input->post('Classical'); }


    if($this->input->post('Rap') == "") 
       { $param['Rap']=0; }
    else
       { $param['Rap'] = $this->input->post('Rap'); }

    if($this->input->post('Soul') == "") 
       { $param['Soul']=0; }
    else
       { $param['Soul'] = $this->input->post('Soul'); }

    if($this->input->post('Rock') == "") 
       { $param['Rock']=0; }
    else
       { $param['Rock'] = $this->input->post('Rock'); }


    if($this->input->post('Blues') == "") 
       { $param['Blues']=0; }
    else
       { $param['Blues'] = $this->input->post('Blues'); }

    if($this->input->post('HipHop') == "") 
       { $param['HipHop']=0; }
    else
       { $param['HipHop'] = $this->input->post('HipHop'); }

    $param['Metal'] = $this->input->post('Metal');

if($this->input->post('Metal') == "") 
       { $param['Metal']=0; }
    else
       { $param['Metal'] = $this->input->post('Metal'); }        

    if($this->input->post('Reggae') == "") 
       { $param['Reggae']=0; }
    else
       { $param['Reggae'] = $this->input->post('Reggae'); }


    if($this->input->post('Techno') == "") 
       { $param['Techno']=0; }
    else
       { $param['Techno'] = $this->input->post('Techno'); }


    if($this->input->post('R_n_B') == "") 
       { $param['R_n_B']=0; }
    else
       { $param['R_n_B'] = $this->input->post('R_n_B'); }

    if($this->input->post('Dark_Wave') == "") 
       { $param['Dark_Wave']=0; }
    else
       { $param['Dark_Wave'] = $this->input->post('Dark_Wave'); }

        if($this->input->post('Pop') == "") 
       { $param['Pop']=0; }
    else
       { $param['Pop'] = $this->input->post('Pop'); }


        if($this->input->post('Rock_n_Roll') == "") 
       { $param['Rock_n_Roll']=0; }
    else
       { $param['Rock_n_Roll'] = $this->input->post('Rock_n_Roll'); }


    if($this->input->post('Trance') == "") 
       { $param['Trance']=0; }
    else
       { $param['Trance'] = $this->input->post('Trance'); }


    if($this->input->post('House') == "") 
       { $param['House']=0; }
    else
       { $param['House'] = $this->input->post('House'); }

    if($this->input->post('Funk') == "") 
       { $param['Funk']=0; }
    else
       { $param['Funk'] = $this->input->post('Funk'); }

    if($this->input->post('Jazz') == "") 
       { $param['Jazz']=0; }
    else
       { $param['Jazz'] = $this->input->post('Jazz'); }

    $param['Punkrock'] = $this->input->post('Punkrock');


    if($this->input->post('Punkrock') == "") 
       { $param['Punkrock']=0; }
    else
       { $param['Punkrock'] = $this->input->post('Punkrock'); }
/////////////////////////////////////////////////////////////////

        if($this->input->post('Schlager') == "") 
       { $param['Schlager']=0; }
    else
       { $param['Schlager'] = $this->input->post('Schlager'); }

     if($this->input->post('Travelling') == "") 
       { $param['Travelling']=0; }
    else
       { $param['Travelling'] = $this->input->post('Travelling'); }

     if($this->input->post('Bars') == "") 
       { $param['Bars']=0; }
    else
       { $param['Bars'] = $this->input->post('Bars'); }

    if($this->input->post('Photography') == "") 
       { $param['Photography']=0; }
    else
       { $param['Photography'] = $this->input->post('Photography'); }

    if($this->input->post('Art') == "") 
       { $param['Art']=0; }
    else
       { $param['Art'] = $this->input->post('Art'); }

    if($this->input->post('Poker') == "") 
       { $param['Poker']=0; }
    else
       { $param['Poker'] = $this->input->post('Poker'); }

     if($this->input->post('Yoga') == "") 
       { $param['Yoga']=0; }
    else
       { $param['Yoga'] = $this->input->post('Yoga'); }

    if($this->input->post('Concerts') == "") 
       { $param['Concerts']=0; }
    else
       { $param['Concerts'] = $this->input->post('Concerts'); }

    if($this->input->post('Clubbing') == "") 
       { $param['Clubbing']=0; }
    else
       { $param['Clubbing'] = $this->input->post('Clubbing'); }

    if($this->input->post('Meeting_friends') == "") 
       { $param['Meeting_friends']=0; }
    else
       { $param['Meeting_friends'] = $this->input->post('Meeting_friends'); }
///////////////////////////////////////////////
     if($this->input->post('Meditation') == "") 
       { $param['Meditation']=0; }
    else
       { $param['Meditation'] = $this->input->post('Meditation'); }
////////////////////////////////////
    
     if($this->input->post('Shopping') == "") 
       { $param['Shopping']=0; }
    else
       { $param['Shopping'] = $this->input->post('Shopping'); }

         if($this->input->post('Reading') == "") 
       { $param['Reading']=0; }
    else
       { $param['Reading'] = $this->input->post('Reading'); }

    $param['TV'] = $this->input->post('TV');
         if($this->input->post('TV') == "") 
       { $param['TV']=0; }
    else
       { $param['TV'] = $this->input->post('TV'); }

         if($this->input->post('Watching_sports') == "") 
       { $param['Watching_sports']=0; }
    else
       { $param['Watching_sports'] = $this->input->post('Watching_sports'); }

         if($this->input->post('Music') == "") 
       { $param['Music']=0; }
    else
       { $param['Music'] = $this->input->post('Music'); }

         if($this->input->post('Singing') == "") 
       { $param['Singing']=0; }
    else
       { $param['Singing'] = $this->input->post('Singing'); }

    
    if($this->input->post('Cinema') == "") 
       { $param['Cinema']=0; }
    else
       { $param['Cinema'] = $this->input->post('Cinema'); }

    if($this->input->post('Festivals') == "") 
       { $param['Festivals']=0; }
    else
       { $param['Festivals'] = $this->input->post('Festivals'); }

    if($this->input->post('Online_games') == "") 
       { $param['Online_games']=0; }
    else
       { $param['Online_games'] = $this->input->post('Online_games'); }

     if($this->input->post('Making_music') == "") 
       { $param['Making_music']=0; }
    else
       { $param['Making_music'] = $this->input->post('Making_music'); }

    if($this->input->post('Hiking') == "") 
       { $param['Hiking']=0; }
    else
       { $param['Hiking'] = $this->input->post('Hiking'); }

    if($this->input->post('German') == "") 
       { $param['German']=0; }
    else
       { $param['German'] = $this->input->post('German'); }
            
    if($this->input->post('Albanian') == "") 
       { $param['Albanian']=0; }
    else
       { $param['Albanian'] = $this->input->post('Albanian'); }
/////////////////////////////////////////////
        if($this->input->post('Chinese') == "") 
       { $param['Chinese']=0; }
    else
       { $param['Chinese'] = $this->input->post('Chinese'); }


        if($this->input->post('Danish') == "") 
       { $param['Danish']=0; }
    else
       { $param['Danish'] = $this->input->post('Danish'); }

        if($this->input->post('Italian') == "") 
       { $param['Italian']=0; }
    else
       { $param['Italian'] = $this->input->post('Italian'); }

        if($this->input->post('Norwegian') == "") 
       { $param['Norwegian']=0; }
    else
       { $param['Norwegian'] = $this->input->post('Norwegian'); }

        if($this->input->post('Russian') == "") 
       { $param['Russian']=0; }
    else
       { $param['Russian'] = $this->input->post('Russian'); }


        if($this->input->post('Czech') == "") 
       { $param['Czech']=0; }
    else
       { $param['Czech'] = $this->input->post('Czech'); }

        if($this->input->post('English') == "") 
       { $param['English']=0; }
    else
       { $param['English'] = $this->input->post('English'); }


        if($this->input->post('Arabic') == "") 
       { $param['Arabic']=0; }
    else
       { $param['Arabic'] = $this->input->post('Arabic'); }

        if($this->input->post('Finnish') == "") 
       { $param['Finnish']=0; }
    else
       { $param['Finnish'] = $this->input->post('Finnish'); }


        if($this->input->post('Japanese') == "") 
       { $param['Japanese']=0; }
    else
       { $param['Japanese'] = $this->input->post('Japanese'); }


        if($this->input->post('Polish') == "") 
       { $param['Polish']=0; }
    else
       { $param['Polish'] = $this->input->post('Polish'); }

    
        if($this->input->post('Swedish') == "") 
       { $param['Swedish']=0; }
    else
       { $param['Swedish'] = $this->input->post('Swedish'); }


        if($this->input->post('Turkish') == "") 
       { $param['Turkish']=0; }
    else
       { $param['Turkish'] = $this->input->post('Turkish'); }


        if($this->input->post('Spanish') == "") 
       { $param['Spanish']=0; }
    else
       { $param['Spanish'] = $this->input->post('Spanish'); }

    if($this->input->post('Greek') == "") 
       { $param['Greek']=0; }
    else
       { $param['Greek'] = $this->input->post('Greek'); }

if($this->input->post('Bengali') == "") 
       { $param['Bengali']=0; }
    else
       { $param['Bengali'] = $this->input->post('Bengali'); }

    if($this->input->post('Croatian') == "") 
       { $param['Croatian']=0; }
    else
       { $param['Croatian'] = $this->input->post('Croatian'); }

   if($this->input->post('Bengali') == "") 
       { $param['Bengali']=0; }
    else
       { $param['Bengali'] = $this->input->post('Bengali'); }


    if($this->input->post('Portuguese') == "") 
       { $param['Portuguese']=0; }
    else
       { $param['Portuguese'] = $this->input->post('Portuguese'); }



    if($this->input->post('Serbian') == "") 
       { $param['Serbian']=0; }
    else
       { $param['Serbian'] = $this->input->post('Serbian'); }


    if($this->input->post('Hungarian') == "") 
       { $param['Hungarian']=0; }
    else
       { $param['Hungarian'] = $this->input->post('Hungarian'); }

   if($this->input->post('French') == "") 
       { $param['French']=0; }
    else
       { $param['French'] = $this->input->post('French'); }



    if($this->input->post('Bosnian') == "") 
       { $param['Bosnian']=0; }
    else
       { $param['Bosnian'] = $this->input->post('Bosnian'); }



            if($this->input->post('Hindi') == "") 
       { $param['Hindi']=0; }
    else
       { $param['Hindi'] = $this->input->post('Hindi'); }


    if($this->input->post('Dutch') == "") 
       { $param['Dutch']=0; }
    else
       { $param['Dutch'] = $this->input->post('Dutch'); }


     if($this->input->post('Romanian') == "") 
       { $param['Romanian']=0; }
    else
       { $param['Romanian'] = $this->input->post('Romanian'); }



     if($this->input->post('Slovakian') == "") 
       { $param['Slovakian']=0; }
    else
       { $param['Slovakian'] = $this->input->post('Slovakian'); }

    if($this->input->post('Sign_Language')) 
       { $param['Sign_Language']=$this->input->post('Sign_Language'); }
    else
       { $param['Sign_Language'] = 0; }




    $param['I_smoke'] = $this->input->post('I_smoke');
    $param['I_cook'] = $this->input->post('I_cook');
    $param['I_will_bring'] = $this->input->post('I_will_bring');
    $param['Smoking_is_okay'] = $this->input->post('Smoking_is_okay');

   $this->Building_model->add_request($param);


   $data['gender']=$this->input->post('gender');
   $data['first_name']=$this->input->post('first_name');
   $data['last_name']=$this->input->post('last_name');
   $data['name_display']=$this->input->post('name_display');
   $data['mobile']=$this->input->post('mobile');
   $data['mobile_available_from_h']=$this->input->post('mobile_available_from_h');
   $data['mobile_available_from_m']=$this->input->post('mobile_available_from_m');
   $data['mobile_available_to_h']=$this->input->post('mobile_available_to_h');
   $data['mobile_available_to_m']=$this->input->post('mobile_available_to_m');

   $data['street']=$this->input->post('street');
   $data['house_no']=$this->input->post('house_no');
   $data['last_name']=$this->input->post('last_name');
   $data['city']=$this->input->post('city');
   $data['current_live']=$this->input->post('current_live');

   $data['date_of_birth']=$this->input->post('date_of_birth');
   $data['fb_link']=$this->input->post('fb_link');
   $data['job']=$this->input->post('job');
   
   $this->Building_model->update_user($data);

   header('location:'.$this->config->base_url().'egar/request');

   }


   public function offer(){
          $param['result']=$this->Building_model->city_search();

      $this->load->view('en/create_offer1',$param);

   }

   public function offer2(){
    $param['building_type'] = $this->input->post('building_type');
    $param['city'] = $this->input->post('city');
    $param['period'] = $this->input->post('period');
    $id=$this->session->userdata['logged_in']['id'] ;
    $param['user_data'] =$this->Building_model->user_data($id);
    $this->load->view('en/CreateOffers',$param);
   }

   public function add_offer(){
   $param['user_id'] = $this->session->userdata['logged_in']['id'];
   $param['user_gender'] = $this->session->userdata['logged_in']['gender'];
   $var="img";
   $param['image'] = $this->upload_image($var);
   $data['gender']=$this->input->post('gender');
   $data['first_name']=$this->input->post('first_name');
   $data['last_name']=$this->input->post('last_name');
   $data['name_display']=$this->input->post('name_display');
   $data['mobile']=$this->input->post('mobile');
   $data['mobile_available_from_h']=$this->input->post('mobile_available_from_h');
   $data['mobile_available_from_m']=$this->input->post('mobile_available_from_m');
   $data['mobile_available_to_h']=$this->input->post('mobile_available_to_h');
   $data['mobile_available_to_m']=$this->input->post('mobile_available_to_m');

   $data['street']=$this->input->post('street');
   $data['house_no']=$this->input->post('house_no');
   $data['last_name']=$this->input->post('last_name');
   $data['city']=$this->input->post('city');
   $data['current_live']=$this->input->post('current_live');

   $data['date_of_birth']=$this->input->post('date_of_birth');
   $data['fb_link']=$this->input->post('fb_link');
   $data['job']=$this->input->post('job');

   $this->Building_model->update_user($data);


if($this->input->post('any') == "") 
       { $param['any']=0; }
    else
       { $param['any'] = $this->input->post('any'); }

    if($this->input->post('students_only') == "") 
       { $param['students_only']=0; }
    else
       { $param['students_only'] = $this->input->post('students_only'); }

    if($this->input->post('mixed_gender') == "") 
       { $param['mixed_gender']=0; }
    else
       { $param['mixed_gender'] = $this->input->post('mixed_gender'); }

      if($this->input->post('female_only') == "") 
       { $param['female_only']=0; }
    else
       { $param['female_only'] = $this->input->post('female_only'); }


    if($this->input->post('workers_only') == "") 
       { $param['workers_only']=0; }
    else
       { $param['workers_only'] = $this->input->post('workers_only'); }

    if($this->input->post('business_people') == "") 
       { $param['business_people']=0; }
    else
       { $param['business_people'] = $this->input->post('business_people'); }

    if($this->input->post('50') == "") 
       { $param['50']=0; }
    else
       { $param['50'] = $this->input->post('50'); }

    if($this->input->post('party') == "") 
       { $param['party']=0; }
    else
       { $param['party'] = $this->input->post('party'); }

    if($this->input->post('male_only') == "") 
       { $param['male_only']=0; }
    else
       { $param['male_only'] = $this->input->post('male_only'); }

        if($this->input->post('seniors_only') == "") 
       { $param['seniors_only']=0; }
    else
       { $param['seniors_only'] = $this->input->post('seniors_only'); }

     if($this->input->post('varied_age') == "") 
       { $param['varied_age']=0; }
    else
       { $param['varied_age'] = $this->input->post('varied_age'); }


     if($this->input->post('vegetarian') == "") 
       { $param['vegetarian']=0; }
    else
       { $param['vegetarian'] = $this->input->post('vegetarian'); }


     if($this->input->post('with_children') == "") 
       { $param['with_children']=0; }
    else
       { $param['with_children'] = $this->input->post('with_children'); }


    if($this->input->post('room_for_help') == "") 
       { $param['room_for_help']=0; }
    else
       { $param['room_for_help'] = $this->input->post('room_for_help'); }

    if($this->input->post('Residential_Home') == "") 
       { $param['Residential_Home']=0; }
    else
       { $param['Residential_Home'] = $this->input->post('Residential_Home'); }

      if($this->input->post('German') == "") 
       { $param['German']=0; }
    else
       { $param['German'] = $this->input->post('German'); }
            
    if($this->input->post('Albanian') == "") 
       { $param['Albanian']=0; }
    else
       { $param['Albanian'] = $this->input->post('Albanian'); }
/////////////////////////////////////////////
        if($this->input->post('Chinese') == "") 
       { $param['Chinese']=0; }
    else
       { $param['Chinese'] = $this->input->post('Chinese'); }


        if($this->input->post('Danish') == "") 
       { $param['Danish']=0; }
    else
       { $param['Danish'] = $this->input->post('Danish'); }

        if($this->input->post('Italian') == "") 
       { $param['Italian']=0; }
    else
       { $param['Italian'] = $this->input->post('Italian'); }

        if($this->input->post('Norwegian') == "") 
       { $param['Norwegian']=0; }
    else
       { $param['Norwegian'] = $this->input->post('Norwegian'); }

        if($this->input->post('Russian') == "") 
       { $param['Russian']=0; }
    else
       { $param['Russian'] = $this->input->post('Russian'); }


        if($this->input->post('Czech') == "") 
       { $param['Czech']=0; }
    else
       { $param['Czech'] = $this->input->post('Czech'); }

        if($this->input->post('English') == "") 
       { $param['English']=0; }
    else
       { $param['English'] = $this->input->post('English'); }


        if($this->input->post('Arabic') == "") 
       { $param['Arabic']=0; }
    else
       { $param['Arabic'] = $this->input->post('Arabic'); }

        if($this->input->post('Finnish') == "") 
       { $param['Finnish']=0; }
    else
       { $param['Finnish'] = $this->input->post('Finnish'); }


        if($this->input->post('Japanese') == "") 
       { $param['Japanese']=0; }
    else
       { $param['Japanese'] = $this->input->post('Japanese'); }


        if($this->input->post('Polish') == "") 
       { $param['Polish']=0; }
    else
       { $param['Polish'] = $this->input->post('Polish'); }

    
        if($this->input->post('Swedish') == "") 
       { $param['Swedish']=0; }
    else
       { $param['Swedish'] = $this->input->post('Swedish'); }


        if($this->input->post('Turkish') == "") 
       { $param['Turkish']=0; }
    else
       { $param['Turkish'] = $this->input->post('Turkish'); }


        if($this->input->post('Spanish') == "") 
       { $param['Spanish']=0; }
    else
       { $param['Spanish'] = $this->input->post('Spanish'); }


    if($this->input->post('Bengali') == "") 
       { $param['Bengali']=0; }
    else
       { $param['Bengali'] = $this->input->post('Bengali'); }

    if($this->input->post('Croatian') == "") 
       { $param['Croatian']=0; }
    else
       { $param['Croatian'] = $this->input->post('Croatian'); }

   if($this->input->post('Bengali') == "") 
       { $param['Bengali']=0; }
    else
       { $param['Bengali'] = $this->input->post('Bengali'); }


    if($this->input->post('Portuguese') == "") 
       { $param['Portuguese']=0; }
    else
       { $param['Portuguese'] = $this->input->post('Portuguese'); }


    if($this->input->post('Serbian') == "") 
       { $param['Serbian']=0; }
    else
       { $param['Serbian'] = $this->input->post('Serbian'); }


    if($this->input->post('Hungarian') == "") 
       { $param['Hungarian']=0; }
    else
       { $param['Hungarian'] = $this->input->post('Hungarian'); }

   if($this->input->post('French') == "") 
       { $param['French']=0; }
    else
       { $param['French'] = $this->input->post('French'); }



    if($this->input->post('Bosnian') == "") 
       { $param['Bosnian']=0; }
    else
       { $param['Bosnian'] = $this->input->post('Bosnian'); }



            if($this->input->post('Hindi') == "") 
       { $param['Hindi']=0; }
    else
       { $param['Hindi'] = $this->input->post('Hindi'); }


    if($this->input->post('Dutch') == "") 
       { $param['Dutch']=0; }
    else
       { $param['Dutch'] = $this->input->post('Dutch'); }


     if($this->input->post('Romanian') == "") 
       { $param['Romanian']=0; }
    else
       { $param['Romanian'] = $this->input->post('Romanian'); }



     if($this->input->post('Slovakian') == "") 
       { $param['Slovakian']=0; }
    else
       { $param['Slovakian'] = $this->input->post('Slovakian'); }

    if($this->input->post('Sign_Language')) 
       { $param['Sign_Language']=$this->input->post('Sign_Language'); }
    else
       { $param['Sign_Language'] = 0; }

    $param['category'] = $this->input->post('building_type');
    $param['city'] = $this->input->post('city_offer');
    $param['rent_type'] = $this->input->post('period');

    $param['street_and_house_no'] = $this->input->post('street');

  if($this->input->post('available_from_d'))
    {$param['available_from_d'] = $this->input->post('available_from_d');}
  else{
    $param['available_from_d'] = $this->input->post('available_from_d_f');
  }


  if($this->input->post('available_from_d'))
    {$param['available_from_m'] = $this->input->post('available_from_m');}
  else{
    $param['available_from_m'] = $this->input->post('available_from_m_f');
  }

   if($this->input->post('available_from_y'))
    {$param['available_from_y'] = $this->input->post('available_from_y');}
  else{
    $param['available_from_y'] = $this->input->post('available_from_y_f');
  }

   if($this->input->post('available_to_m'))
    {$param['available_to_m'] = $this->input->post('available_to_m');}
  else{
    $param['available_to_m'] = $this->input->post('available_to_m_f');
  }


   if($this->input->post('available_to_d'))
    {$param['available_to_d'] = $this->input->post('available_to_d');}
  else{
    $param['available_to_d'] = $this->input->post('available_to_d_f');
  }

   if($this->input->post('available_to_y'))
    {$param['available_to_y'] = $this->input->post('available_to_y');}
  else{
    $param['available_to_y'] = $this->input->post('available_to_y_f');
  }



  if($this->input->post('flat_size'))
    {$param['total_flat_size'] = $this->input->post('flat_size');}
  else{
    $param['total_flat_size'] = $this->input->post('size');
  }   
    $param['room_size'] = $this->input->post('room_size');
    $param['number_of_rooms'] = $this->input->post('number_of_rooms');


  if($this->input->post('property_type'))
    {$param['property_type'] = $this->input->post('property_type');}
  else{
    $param['property_type'] = $this->input->post('property_type_f');
  }


  if($this->input->post('floor_level'))
    {$param['floor_level'] = $this->input->post('floor_level');}
  else{
    $param['floor_level'] = $this->input->post('floor_level_f');
  }

  if($this->input->post('handicapped_accessible'))
    {$param['handicapped_accessible'] = $this->input->post('handicapped_accessible');}
  else{
    $param['handicapped_accessible'] = $this->input->post('handicapped_accessible_f');
  }


  if($this->input->post('parking'))
    {$param['parking'] = $this->input->post('parking');}
  else{
    $param['parking'] = $this->input->post('parking_f');
  }

   if($this->input->post('public_transport'))
    {$param['public_transport'] = $this->input->post('public_transport');}
  else{
    $param['public_transport'] = $this->input->post('public_transport_f');
  }

$param['sharehouse_suitable'] = $this->input->post('sharehouse_suitable');

$param['rent_per_month'] = $this->input->post('rent_per_month');
$param['utility_costs'] = $this->input->post('utility_costs');
$param['other_costs'] = $this->input->post('other_costs');
$param['deposit'] = $this->input->post('deposit');
$param['fee_for_existing_equipment'] = $this->input->post('fee_for_existing_equipment');
$param['flatshare_size'] = $this->input->post('flatshare_size');
$param['current_flatmates_female'] = $this->input->post('current_flatmates_female');
$param['current_flatmates_male'] = $this->input->post('current_flatmates_male');
$param['flatmate_age_from'] = $this->input->post('flatmate_age_from');

$param['flatmate_age_to'] = $this->input->post('flatmate_age_to');
$param['searching_for'] = $this->input->post('searching_for');
$param['aged_from'] = $this->input->post('aged_from');
$param['aged_to'] = $this->input->post('aged_to');
$param['smoking'] = $this->input->post('smoking');
$param['type_of_energy_certificate'] = $this->input->post('type_of_energy_certificate');

 

$param['consumption_value'] = $this->input->post('consumption_value');
$param['energy_source'] = $this->input->post('energy_source');
$param['property_built_in'] = $this->input->post('property_built_in');

$param['energy_efficiency_class'] = $this->input->post('energy_efficiency_class');
$param['green_power'] = $this->input->post('green_power');
$param['heating'] = $this->input->post('heating');


  if($this->input->post('DSL') == "") 
       { $param['DSL']=0; }
    else
       { $param['DSL'] = $this->input->post('DSL'); }

    if($this->input->post('Flatrate') == "") 
       { $param['Flatrate']=0; }
    else
       { $param['Flatrate'] = $this->input->post('Flatrate'); }

  if($this->input->post('WLAN') == "") 
       { $param['WLAN']=0; }
    else
       { $param['WLAN'] = $this->input->post('WLAN'); }


$param['dsl_speed'] = $this->input->post('dsl_speed');

  if($this->input->post('Provider_change_planned') == "") 
       { $param['Provider_change_planned']=0; }
    else
       { $param['Provider_change_planned'] = $this->input->post('Provider_change_planned'); }

  if($this->input->post('Analog') == "") 
       { $param['Analog']=0; }
    else
       { $param['Analog'] = $this->input->post('Analog'); }
     /////////////////////////////////////////


  if($this->input->post('ISDN') == "") 
       { $param['ISDN']=0; }
    else
       { $param['ISDN'] = $this->input->post('ISDN'); }

  if($this->input->post('VoiP') == "") 
       { $param['VoiP']=0; }
    else
       { $param['VoiP'] = $this->input->post('VoiP'); }
     
  if($this->input->post('Telephone_Flatrate') == "") 
       { $param['Telephone_Flatrate']=0; }
    else
       { $param['Telephone_Flatrate'] = $this->input->post('Telephone_Flatrate'); }

  if($this->input->post('Furnished') == "") 
       { $param['Furnished']=0; }
    else
       { $param['Furnished'] = $this->input->post('Furnished'); }

  if($this->input->post('Partly_Furnished') == "") 
       { $param['Partly_Furnished']=0; }
    else
       { $param['Partly_Furnished'] = $this->input->post('Partly_Furnished'); }

  if($this->input->post('Bath') == "") 
       { $param['Bath']=0; }
    else
       { $param['Bath'] = $this->input->post('Bath'); }

     ///////////////////////////////

       if($this->input->post('Shower') == "") 
       { $param['Shower']=0; }
    else
       { $param['Shower'] = $this->input->post('Shower'); }
     
       if($this->input->post('Floorboards') == "") 
       { $param['Floorboards']=0; }
    else
       { $param['Floorboards'] = $this->input->post('Floorboards'); }
     
       if($this->input->post('Parquet_Flooring') == "") 
       { $param['Parquet_Flooring']=0; }
    else
       { $param['Parquet_Flooring'] = $this->input->post('Parquet_Flooring'); }
     
       if($this->input->post('Laminate') == "") 
       { $param['Laminate']=0; }
    else
       { $param['Laminate'] = $this->input->post('Laminate'); }
     
       if($this->input->post('Carpet') == "") 
       { $param['Carpet']=0; }
    else
       { $param['Carpet'] = $this->input->post('Carpet'); }
     

       if($this->input->post('Tiles') == "") 
       { $param['Tiles']=0; }
    else
       { $param['Tiles'] = $this->input->post('Tiles'); }
     


   
   ////////////////////////////////

       if($this->input->post('Lino') == "") 
       { $param['Lino']=0; }
    else
       { $param['Lino'] = $this->input->post('Lino'); }

     
       if($this->input->post('Underfloor_Heating') == "") 
       { $param['Underfloor_Heating']=0; }
    else
       { $param['Underfloor_Heating'] = $this->input->post('Underfloor_Heating'); }
     

       if($this->input->post('Cable_TV') == "") 
       { $param['Cable_TV']=0; }
    else
       { $param['Cable_TV'] = $this->input->post('Cable_TV'); }

      if($this->input->post('Satellite_Tv') == "") 
       { $param['Satellite_Tv']=0; }
    else
       { $param['Satellite_Tv'] = $this->input->post('Satellite_Tv'); }
     
       if($this->input->post('Washing_Machine') == "") 
       { $param['Washing_Machine']=0; }
    else
       { $param['Washing_Machine'] = $this->input->post('Washing_Machine'); }
     

       if($this->input->post('Dishwasher') == "") 
       { $param['Dishwasher']=0; }
    else
       { $param['Dishwasher'] = $this->input->post('Dishwasher'); }

////////////////////////////////////////
       if($this->input->post('Terrace') == "") 
       { $param['Terrace']=0; }
    else
       { $param['Terrace'] = $this->input->post('Terrace'); }


       if($this->input->post('Balcony') == "") 
       { $param['Balcony']=0; }
    else
       { $param['Balcony'] = $this->input->post('Balcony'); }

       if($this->input->post('Garden') == "") 
       { $param['Garden']=0; }
    else
       { $param['Garden'] = $this->input->post('Garden'); }

       if($this->input->post('Shared_Garden') == "") 
       { $param['Shared_Garden']=0; }
    else
       { $param['Shared_Garden'] = $this->input->post('Shared_Garden'); }

       if($this->input->post('Basement') == "") 
       { $param['Basement']=0; }
    else
       { $param['Basement'] = $this->input->post('Basement'); }

       if($this->input->post('Elevator') == "") 
       { $param['Elevator']=0; }
    else
       { $param['Elevator'] = $this->input->post('Elevator'); }

       if($this->input->post('Pets_are_welcome') == "") 
       { $param['Pets_are_welcome']=0; }
    else
       { $param['Pets_are_welcome'] = $this->input->post('Pets_are_welcome'); }


       if($this->input->post('Bicycle_Storage') == "") 
       { $param['Bicycle_Storage']=0; }
    else
       { $param['Bicycle_Storage'] = $this->input->post('Bicycle_Storage'); }



$param['room_desc'] = $this->input->post('room_desc');
$param['location_desc'] = $this->input->post('location_desc');
$param['flatshare_type_desc'] = $this->input->post('flatshare_type_desc');
$param['miscellaneous'] = $this->input->post('miscellaneous');
   $this->Building_model->add_offer($param);
   header('location:'.$this->config->base_url().'egar/offer');

   }
}
