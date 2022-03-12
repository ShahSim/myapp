<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeModel extends CI_Model {


    function getInfo() {
        $query = $this->db->get('Employee');
        return $query->result();
    }

    function insertInfo($data) {
        return $this->db->insert('Employee',$data);;
    }
//////For edit and update
    function editInfo($id)
    {
        $query = $this->db->get_where('Employee', ['id'=>$id]);
        return $query->row();
    }

    function updateInfo($data,$id)
    {
        return $this->db->update('Employee', $data, ['id'=>$id]);
    }
///////

    function deleteInfo($id)
    {
        return $this->db->delete('Employee',['id'=>$id]);
    }
}