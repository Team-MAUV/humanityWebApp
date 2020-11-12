<?php

class staff_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }
  public function getAllrecords()
  {
      return $this->db->select("SELECT * FROM `leave_request` ORDER BY  staff_id");
  }
  public function submit_requestleave($data)
  {
      $this->db->insert('leave_request', $data);
  }





}