<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logout extends CI_Controller{
  function index(){
      $this->ion_auth->logout();
      redirect('alfredatwork/login');
  }

}
