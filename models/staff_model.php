<?php

class staff_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }
  public function getAllrecords()
  {
      return $this->db->select("SELECT * FROM `humanity` ORDER BY id DESC");
  }
  public function submit_requestleave($data)
  {
      $this->db->insert('humanity', $data);
  }





}