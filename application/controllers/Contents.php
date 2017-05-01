<?php

class Contents extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->helper('url');
		include APPPATH . 'third_party/style.php';
    }
    
    public function about(){
        $this->load->view('templates/navbar');
        $this->load->view('contents/about');
    }
    
    public function credits(){
        
    }
    
    public function security(){
        
    }
    
    public function welcome(){
        $this->load->view('welcome');
    }
    
    public function index(){
        echo "Lists of Contents included:";
        echo "<a href='#'>About</a>";
    }
    
    
}