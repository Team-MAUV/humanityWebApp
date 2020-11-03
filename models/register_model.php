<?php


class register_model extends Model

{

    public function __construct()
    {
        parent::__construct();
    }

    public function check_volunteer($name,$nic,$email)
    {

        $check_db=$this->db->prepare("SELECT * FROM 'volunteer' WHERE name='".$name."' OR email='".$email."' OR nic='".$nic."' ");
        $count=count($check_db);
        return $count;
    }
    public function insert_volunteer($data){
        $this->db->insert('volunteer',$data);

      

    }
}
