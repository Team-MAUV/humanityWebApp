<?php

class commissioner_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }



  public function get_reg_vol_profiles()
  {
    $st = $this->db->prepare('SELECT * FROM contacts ORDER BY id LIMIT :current_page, :record_per_page');

    // Get the page via GET request (URL param: page), if non exists default the page to 1
    $page_no = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

    // Number of records to show on each page
    $records_per_page = 5;

    $st->bindValue(':current_page', ($page_no - 1) * $records_per_page, PDO::PARAM_INT);
    $st->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
    $st->execute();

    $num_contacts = $this->db->query('SELECT COUNT(*) FROM contacts')->fetchColumn();


    $contacts = $st->fetchAll();

    //All the data that has to be return from this functon is added to an associative array
    $pageData = [
      'page_no' => $page_no,
      'records_per_page' => $records_per_page,
      'contacts' => $contacts,
      'num_contacts' => $num_contacts

    ];


    return ($pageData);
  }
}
