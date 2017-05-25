<?php

class user_model extends CI_Model {

    function __construct() {
        parent:: __construct();
        $this->load->database();
    }

    function index() {
        echo"i am index";
    }

       function insert($image='') {
        //echo"insert function of model";
        //echo $this->input->post('email');
           
           
                  $month = $this->input->post('month');
           $day =$this->input->post('day');
           $year = $this->input->post('year');
$date=$year."/".$month."/".$day;
echo $date;

        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'gender' => $this->input->post('gender'),
          'date'=>$date,
                      'image'=>$image,

      );
        $this->db->insert('tbl_user', $data);
    }

    function login() {
        $username = $this->input->post('Username');
        $password = $this->input->post('Password');
        

        $res = $this->db->query("SELECT * from tbl_user where email='$username' AND password='$password'");
//echo "<pre>";
//var_dump($res);
        $user = $res->row();
//echo "</pre>";

        if (count($user) == 1) {
            $email = $user->email;

            $id = $user->id;

            $this->session->set_userdata('loggedin',TRUE);
            $this->session->set_userdata('email', $email);
            $this->session->set_userdata('uid', $id);
            return true;
        } else {
            $this->session->set_flashdata('error', 'invalid user name or password');
            return false;
        }
    }
    
    function getSingleData(){
        $id= $this->session->userdata('uid');
        $this->db->where('id',$id);
       $dT= $this->db->get('tbl_user')->result();
        return $dT;
    }
    
    function getAll() {
        $res = $this->db->query("SELECT *FROM tbl_user order by date DESC");
         $query= $this->db->get('tbl_user');
       //$res=$query->result();
      
        return $res->result();
    }

}

?>