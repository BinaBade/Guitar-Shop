<?php

class user extends CI_controller {

    public function __construct() {
        parent::__construct();
       $this->load->model('user_model');
      // $this->load->model('post_model');
 

//$this->load->helper('url');
//$this->load->library('form_validation')
    }

    public function index() {
        $this->load->view('index');
    }

    public function register() {
        if ($_POST) {
            
$image=$this->do_upload();
//            $this->form_validation->set_rules('firstname', 'First name', 'required');
//            $this->form_validation->set_rules('lastname', 'Last name', 'required');
            $this->form_validation->set_rules('email', 'Email address', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
//            $this->form_validation->set_rules('terms', 'Terms', 'required|true');
            $this->form_validation->set_error_delimiters('<font color="red"><br>', '</font>');
//            echo"ram";
            if ($this->form_validation->run() == FALSE) {
               $this->load->view('register');
//                //echo"something missing";
           } else {
               $this->user_model->insert($image);
                redirect('');
            }
             
                $this->user_model->insert($image);
                redirect('');
        } else {
            
            $this->load->view('register');
        }
    }

    function dashboard()
    {
        $data['img']= $this->user_model->getSingleData();
       // $data['post']= $this->post_model->getAll();
                
                   // echo"sucessfull";
                    $this->load->view('dashboard',$data);
        
    }
    function login() {
        $this->checkLogin();
        if ($_POST) {
            //echo "hy";
            $this->form_validation->set_rules('Username', 'Username', 'required');
            $this->form_validation->set_rules('Password', 'Password', 'required');
            if ($this->form_validation->run() == FALSE) {
                 echo"something missing";
                $this->load->view('login');
               
            } else {
                $res = $this->user_model->login();
                if ($res) {
                    
                $data['img']= $this->user_model->getSingleData();
               // $data['post']= $this->post_model->getAll();
                
                   // echo"sucessfull";
                    $this->load->view('index',$data);
                } else {
                    $this->load->view('login');
                }//else part if user is not validated.
                // echo "form valid";
                //$this->user_model->insert();;
            }
        } else {
            $this->load->view('login');
        }
    }
    function logout()
    {
        session_start();
        $this->session->sess_destroy();
        //print_R($this->session->all_userdata());
        $this->session->set_flashdata('error','logged out');
        redirect('');
    }
    function checkLogin()
    {
        if($this->session->userdata('loggedin')==true)
        {
            
            redirect('');
        }
    }
    private function do_upload() {
        $config['upload_path'] = 'uploads/user_images';
        $config['allowed_types'] = 'jpg|png|jpeg';
//$config['max_size'] = '1000';
//$config['max_width'] = '1024';
//$config['max_height'] = '768';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("userfile")) {
            $data = $this->upload->data();
            $source = "uploads/user_images/" . $data['file_name'];
            return $data['file_name'];
           
        } else {
            $error = strip_tags($this->upload->display_errors());
            echo "<script type='text/javascript'>alert('.$error.');history.back(-1);</script>";
            die();
        }
    }
   

}

?>
