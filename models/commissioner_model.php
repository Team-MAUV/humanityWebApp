<?php

class commissioner_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function get_reg_vol_profiles()
  {

    $st = $this->db->prepare('SELECT * FROM contacts ORDER BY id ');

    $st->execute();
    // Fetch the records so we can display them in our template.
    $contacts = $st->fetchAll();
    //print_r($contacts);
    return $contacts;

    // // Get the total number of contacts, this is so we can determine whether there should be a next and previous button
    // $num_contacts = $this->db->query('SELECT COUNT(*) FROM contacts')->fetchColumn();
  }

  public function get_reg_vol_profiles_page_count()
  {

    $st = $this->db->prepare('SELECT * FROM contacts ORDER BY id LIMIT :current_page, :record_per_page');
    // Get the page via GET request (URL param: page), if non exists default the page to 1
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
    // Number of records to show on each page
    $records_per_page = 5;

    // Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page

    $st->bindValue(':current_page', ($page - 1) * $records_per_page, PDO::PARAM_INT);
    $st->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
    $st->execute();
    // Fetch the records so we can display them in our template.
    //$contacts = $st->fetchAll();


    // // Get the total number of contacts, this is so we can determine whether there should be a next and previous button
    return $this->db->query('SELECT COUNT(*) FROM contacts')->fetchColumn();
  }
}
