<?php 

class Milestone extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
		$this->load->helper('url');
		include APPPATH . 'third_party/style.php';
    }
        
    public function index(){
        $data['milestone'] = $this->Milestone_models->get_milestone();
        $this->load->view('templates/navbar');
        $this->load->view('milestone/home', $data);
    }
    
    public function create(){
    $this->load->helper('form');
    $this->load->library('form_validation');


    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)
    {   
        $this->load->view('templates/navbar');
        $this->load->view('milestone/create');


    }
    else
    {
        $this->Milestone_models->set_milestone();
        
        redirect('milestone','refresh');
    }
}
    
    public function edit($id){
        $this->load->helper('form');
    $this->load->library('form_validation');
         $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');
        if ($this->form_validation->run() === FALSE) {
        $data['milestone_item'] = $this->Milestone_models->get_milestone($id);
        $this->load->view('templates/navbar');
        $this->load->view('milestone/edit',$data);
        }
        else {
            $this->Milestone_models->update_projects($id);
            redirect('milestone','refresh');
        }
        
    }

    
    public function delete($id){
        
    }
    
    public function view($id){
        {
                $data['milestone_item'] = $this->Milestone_models->get_milestone($id);
                if (empty($data['milestone_item']))
        {
                show_404();
        }
                $this->load->view('templates/navbar');
                $this->load->view('milestone/view', $data);
        }
    }
}
    
    
