<?php

class Staff extends Controller
{

    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == false) {
            Session::destroy();
            header('location: ../login');
            exit;
        }
    }


    function index()
    {
        $this->view->rendor('staff/dashboard/index');
    }

    /*function Market_module()
    {
        $this->view->rendor('staff/dashboard/Market_module');
    }
*/
    function add_product()
    {
        $this->view->rendor('staff/dashboard/add_product');
    }
    function access_product()
    {
        $this->view->rendor('staff/dashboard/access_product');
    }




    function staff_report()
    {
        $this->view->rendor('staff/dashboard/staff_report');
    }

    function requestleave()
    {
        $this->view->rendor('staff/dashboard/requestleave');
        $this->view->allrecords = $this->model->getAllrecords();
    }
    function edit_submit_requestleave(){
		
		$action=$_POST['submit']; 
		if ($action=='submit')
		{
			echo'$action';
		$arg=$_POST['id'];
		$data = array(
        'id' =>null,
        
        'name' =>$_POST['name'],
        'staff_id' =>$_POST['staff_id'],
		'date' =>$_POST['date'],
        'day_no' => $_POST['day_no'],
        'msg' => $_POST['msg']
		);
		$this->model->submit_requestleave($data);
		
		}
		header('location: ../requestleave');
		}
		



    function staff_gallery()
    {
        $this->view->rendor('staff/dashboard/staff_gallery');
    }

    function staff_notification()
    {
        $this->view->rendor('staff/dashboard/staff_notification');
    }

    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
}
