<?php

/**
 *
 */
class Users extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    if($this->session->userdata('status') != "login"){
      redirect(base_url("login"));
    }
    $this->load->model('s_model');
  }

  function index(){

    $this->load->view('user/index');
  }
}

 ?>
