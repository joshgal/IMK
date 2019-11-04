<?php defined('BASEPATH') OR exit('No direct script access allowed');

class praktikanController extends CI_Controller {

  public function __construct(){
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('landingPage');
  }

  public function halamanProfile()
  {
    $this->load->view('praktikanProfilePage');
  }

  public function halamanJurnal()
  {
    $this->load->view('halamanTesAwal'); 
  }

}