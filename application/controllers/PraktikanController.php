<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PraktikanController extends CI_Controller {

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

  public function halamanJurnal2()
  {
    $this->load->view('halamanJurnal'); 
  }

  public function halamanJurnal3()
  {
    $this->load->view('halamanTesAkhir'); 
  }
  
  public function halamanLogin(){
    $this->load->view('login');
  }

}