<?php


class Register_model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function run_vol_register()
  {
    echo "Volunteer Registration process is here";
  }

  public function run_don_register()
  {
    echo "Donor Registration process is here";
  }

  public function run_buy_register()
  {
    echo "Buyer Registration process is here";
  }
}
