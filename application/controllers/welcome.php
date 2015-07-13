<?php

class Welcome extends CI_Controller {

  function index() {
  	error_log("Logging an error at ".date("m/d/Y H:i:s"));
    $this->load->view('header');
    $this->load->view('pages/welcome');
    $this->load->view('footer');
  }

  function testdb() {
  	$this->load->database();
  	$res = $this->db->query("show tables");
  	print "Tables:<pre>\n";
  	print_r ($res->result());
  	exit();
  }

  function info() {
    phpinfo();
    exit();
  }

}
