<?php

class Issues extends CI_Controller{
    
    public function index(){
         $data['issues'] = $this->Issues_models->get_issues();
        $this->load->view('issues/home', $data);
    }
    
     public function view($id = NULL)
        {
                $data['issue_item'] = $this->Issues_models->get_issues($id);
                if (empty($data['issue_item']))
        {
                show_404();
        }
                $this->load->view('issues/view', $data);
        }
    
    public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');


    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)
    {   
        $data['issues'] = $this->Issues_models->get_issues();
        $data['type'] = $this->Issues_models->get_type();
        $this->load->view('issues/create',$data);


    }
    else
    {
        $this->Issues_models->set_issues();
        
        redirect('issues','refresh');
    }
}
    
    public function edit($id){
        $this->load->helper('form');
    $this->load->library('form_validation');
        if ($this->form_validation->run() === FALSE) {
            
                    $data['issue_item'] = $this->Issues_models->get_issues($id);
                    $data['type'] = $this->Issues_models->get_type();

        $this->load->view('issues/edit',$data); }
        else {
            $this->Issues_models->update_issues($id);
            redirect('issues','refresh');
        }
        
    }
}