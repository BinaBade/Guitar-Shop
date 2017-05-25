<?php

class guitar extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('guitar_model');
        $this->load->model('user_model');
        $this->load->helper('download');
        $this->load->helper('directory');
      
        
        if ($this->session->userdata('loggedin') != TRUE) {
            redirect('user/login');
        }
    }

    private function do_upload() {
        $config['upload_path'] = 'uploads/guitar_images';
        $config['allowed_types'] = '*';
//$config['max_size'] = '1000';
//$config['max_width'] = '1024';
//$config['max_height'] = '768';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("userfile")) {
            $data = $this->upload->data();
            $source = "uploads/guitar_images/" . $data['file_name'];
            return $data['file_name'];
           
        } else {
            $error = strip_tags($this->upload->display_errors());
            echo "<script type='text/javascript'>alert('.$error.');history.back(-1);</script>";
            die();
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
              
                $image = $this->do_upload();

                
             

               
                    
                    $this->guitar_model->insert($image);
                    $this->display();
                }
             else {
                $this->load->view('guitar/guitar_form');
            }
        }
    }

    function display() {
        $data['posts'] = $this->guitar_model->getAll();
        $data['img']= $this->user_model->getSingleData();
        
//print_r($categories);
        $this->load->view('guitar/guitar_table', $data);
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
                $post = $this->guitar_model->getSingle($id);
                $image = $post->file;
            }
            // echo "$image"; die();


            $this->guitar_model->update($id, $image);
            redirect('guitar/display');
        } else {
            
            $data['posts'] = $this->guitar_model->getSingle($id);
            $this->load->view('guitar/edit_guitar', $data);
        }
    }

    function delete($id) {
        $this->db->delete('guitar_table', array('id' => $id));
        redirect('guitar/display');
    }
    function download($temp)
    {//$map=directory_map('./uploads/post_images/original/',1);
        $data=  file_get_contents("./uploads/guitar_images/".$temp);
        
        $name=$temp;
        force_download($name,$data);
    }
function search()
{
    if($_POST)
    {
        $res['result']=$this->guitar_model->search();
        
    }
}
function about()
{
    $this->load->view('about_us');
}
}
