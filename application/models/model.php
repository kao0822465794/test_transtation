<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
    
    function add($data1,$data2,$data3,$data4)
    {
        $this->db->insert('train',$data1);
        $this->db->insert('origin',$data2);
        $this->db->insert('huayrach',$data3);
        $this->db->insert('terminus',$data4);
    }
        function show()
    {
        $this->db->select('*');
        $this->db->from('train');
        $this->db->join('origin','origin.id = train.id');
        $this->db->join('huayrach','huayrach.id = train.id');
        $this->db->join('terminus','terminus.id = train.id');

        $result = $this->db->get();
        return $result->result_array();
    }
}
