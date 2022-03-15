<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    Public function index(){
        $this->load->view('index1');
        $this->load->view('addform');
    }

}
?>