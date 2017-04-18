<?php

class Dashboard extends CI_Controller{
    
    public function index(){
        if(!$this->aauth->is_loggedin()){
			redirect('login');
		}
        else{
            $this->load->view('dashboard/parts/header');
            $this->load->view('dashboard/index');
        }
    }
    
    public function newa(){
        $this->load->view('header');
        
    }
    
}