<?php

  class Maps extends CI_Controller {

    public function __construct() {
      parent::__construct();
    }

    public function index() {
      $this->load->view('maps/index');
    }

    public function search($query) {
      
    }

  }

?>