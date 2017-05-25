<?php

class guitar_model extends CI_Model {

    function __construct() {
        parent:: __construct();
        $this->load->database();
        $this->load->helper('date');
    }

    function insert($image = '') {

     $data = array(
            'price' => $this->input->post('price'),
          'color' => $this->input->post('color'),
            'image' => $image,
           'purchaseDate' => $this->input->post('purchaseDate'),
           'deliveryDate' => $this->input->post('deliveryDate'),
           'dealer' => $this->input->post('dealer'),
           'quantity' => $this->input->post('quantity'),
            'user_id' => $this->session->userdata('uid'),
        );
       
        $this->db->insert('guitar_table', $data);
    }

    function getAll() {
       // $res = $this->db->query("SELECT guitar_table.*,tbl_user.firstname  as name FROM guitar_table INNER JOIN tbl_user ON guitar_table.user_id=tbl_user.id order by date DESC");
        $res = $this->db->query("SELECT * from guitar_table");
         $query= $this->db->get('guitar_table');
       //$res=$query->result();
      
        return $res->result();
    }

    function getMyGuitar(){
        $id=$this->session->userdata('uid');
        $res = $this->db->query("SELECT * FROM guitar_table where user_id ='$id'");
         $query= $this->db->get('guitar_table');
         
         return $res->result();
    }


    function getSingle($id) {

        $res = $this->db->get_where('guitar_table', array('id' => $id));
        return $res->row($id);
    }

    function update($id, $image) {

       
        $data = array(
             'price' => $this->input->post('price'),
          'color' => $this->input->post('color'),
            'image' => $image,
           'purchaseDate' => $this->input->post('purchaseDate'),
           'deliveryDate' => $this->input->post('deliveryDate'),
           'dealer' => $this->input->post('dealer'),
           'quantity' => $this->input->post('quantity'),
                               );
        $this->db->where('id', $id);
        $this->db->update('guitar_table', $data);
    }
   
    function search()
    {
        $string=$this->input->post('searchString');
         $res = $this->db->query("SELECT * FROM guitar_table like title ='$string%'");
         $query= $this->db->get('guitar_table');
        
    }
      
}
