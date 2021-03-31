<?php
class report_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function receipt()
    {
      echo "Report Model Model";
      Pdf::report();
    }

  }