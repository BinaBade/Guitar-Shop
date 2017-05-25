<?php

class customer_model extends CI_Model {

    function __construct() {
        parent:: __construct();
        $this->load->database();
        $this->load->helper('date');
    }

    function insert() {

     $data = array(
            'name' => $this->input->post('name'),
          'email' => $this->input->post('email'),
            'price' => $this->input->post('price'),
           'guitar_id' => $this->input->post('guitar_id'),
           //'deliveryDate' => $this->input->post('deliveryDate'),
           //'dealer' => $this->input->post('dealer'),
           
            //'user_id' => $this->session->userdata('uid'),
        );
       
        $this->db->insert('customer_table', $data);
    }

    function getAll() {
       // $res = $this->db->query("SELECT guitar_table.*,tbl_user.firstname  as name FROM guitar_table INNER JOIN tbl_user ON guitar_table.user_id=tbl_user.id order by date DESC");
        $res = $this->db->query("SELECT * from customer_table");
         $query= $this->db->get('customer_table');
       //$res=$query->result();
      
        return $res->result();
    }




    function getSingle($id) {

        $res = $this->db->get_where('customer_table', array('id' => $id));
        return $res->row($id);
    }

    function update($id) {

       
        $data = array(
            'name' => $this->input->post('name'),
          'email' => $this->input->post('email'),
            'price' => $this->input->post('price'),
           'guitar_id' => $this->input->post('guitar_id'),
                               );
        $this->db->where('id', $id);
        $this->db->update('customer_table', $data);
    }
   
    function search()
    {
        $string=$this->input->post('searchString');
         $res = $this->db->query("SELECT * FROM customer_table like title ='$string%'");
         $query= $this->db->get('customer_table');
        
    }
      
}
