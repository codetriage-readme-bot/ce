<?php

class Projects extends CI_Controller {
    
    public function index(){
        $data['projects'] = $this->Projects_models->get_projects();
        $this->load->view('projects/home', $data);
    }
    
    public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');


    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)
    {   
        $data['projects'] = $this->Projects_models->get_projects();
        $this->load->view('projects/create',$data);


    }
    else
    {
        $this->Projects_Models->set_projects();
        
        redirect('projects','refresh');
    }
}
    
    public function edit($id){
        $this->load->helper('form');
    $this->load->library('form_validation');
         $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');
        if ($this->form_validation->run() === FALSE) {
            
                    $data['project_item'] = $this->Projects_models->get_projects($id);
        $this->load->view('projects/edit',$data);
        }
        else {
            $this->Projects_models->update_projects($id);
            redirect('projects','refresh');
        }
        
    }

    
    public function delete($id){
        
    }
    
    public function view($id){
        {
                $data['projects_item'] = $this->Projects_models->get_projects($id);
                if (empty($data['projects_item']))
        {
                show_404();
        }
                $this->load->view('projects/view', $data);
        }
    }
    
    
}