<?php

class My_db extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_all($pointer){
        $this->db->select('*');
        $this->db->from($pointer);
        $query = $this->db->get();

        return $query;
    }

    function get_project_gallery($table,$id){
        $this->db->select('*');
        $this->db->from('imageLibrary');
        $this->db->where('referenceId', $id);
        $this->db->order_by("id", "asc");
        $query = $this->db->get();

        return $query;
    }

    function filter($table,$section){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('section', $section);
        $this->db->order_by("positionCount", "asc");
        $query = $this->db->get();

        return $query;
    }

    function filter_limit($table,$section, $limit){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('section', $section);
        $this->db->limit($limit);
        $this->db->order_by("positionCount", "asc");
        $query = $this->db->get();

        return $query;
    }

    function get_db_item($table,$id){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('id', $id);
        $query = $this->db->get();

        return $query;
    }

    function get_db_item_update($table,$id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update($table, $data);

        return $query;
    }

    function gc_output($table){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by("section", "asc");
        $query = $this->db->get();

        return $query;
    }

    function create_Entry($table,$data){
        $content = $this->db->insert($table, $data);
        return $content;
    }

    function set_for_deletion($table,$id){
        $this->db->where('id', $id);
        $this->db->delete($table); 
        return 'success';
    }

    function login(){
        $user = $_POST['username'];
        $password = $_POST['password'];
        $response = "success";

        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('username', $user);
        $this->db->where('password', $password);
        $query = $this->db->get();

        if($query->num_rows() == 0){$response = "failed";}

        return $response;
    }

}