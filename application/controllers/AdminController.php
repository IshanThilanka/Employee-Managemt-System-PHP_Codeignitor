<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->model('Authentication');
    }
    public function index()
	{
		$this->load->view('template/loginHeader.php'); 
        $this->load->view('adminpage');  
        $this->load->view('template/footer.php');  
	}











}