<?php

class customer extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('customer_model');
        $this->load->model('user_model');
        $this->load->helper('download');
        $this->load->helper('directory');
      
        
        if ($this->session->userdata('loggedin') != TRUE) {
            redirect('user/login');
        }
    }

   
//if (!$this->upload->do_upload())
//{
//$error = array('error' => $this->upload->display_errors());
//print_r($error);
//die();
//}
//else
//{
//$data=$this->upload->data();
//return $data['file_name'];
//}


    function add() { {
            
            if ($_POST) {
                
                //echo $this->session->userdata('uid');
              
              
                
             

               
                    
                    $this->customer_model->insert();
                    $this->display();
                }
             else {
                $this->load->view('customer/customer_form');
            }
        }
    }

    function display() {
        $data['posts'] = $this->customer_model->getAll();
        $data['img']= $this->user_model->getSingleData();
        
//print_r($categories);
        $this->load->view('customer/customer_table', $data);
    }
    
//     function displayMyPost() {
//         $data['posts'] = $this->guitar_model->getMyGuitar();
//         $data['img']= $this->user_model->getSingleData();
        
// //print_r($categories);
//         $this->load->view('guitar/my_guitar', $data);
//     }

    function edit($id) {
        if ($_POST) {
            $newImage = $_FILES['userfile']['name'];
            if ($newImage != '') {
                $image = $this->do_upload();
            } else {
                $post = $this->customer_model->getSingle($id);
                $image = $post->file;
            }
            // echo "$image"; die();


            $this->customer_model->update($id, $image);
            redirect('customer/display');
        } else {
            
            $data['posts'] = $this->customer_model->getSingle($id);
            $this->load->view('customer/edit_customer', $data);
        }
    }

    function delete($id) {
        $this->db->delete('customer_table', array('id' => $id));
        redirect('customer/display');
    }
    
function search()
{
    if($_POST)
    {
        $res['result']=$this->customer_model->search();
        
    }
}
}
