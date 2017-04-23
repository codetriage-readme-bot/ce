<?php

class Projects_models extends CI_Model{
    
    public function get_projects($id = NULL)
{
        if ($id === NULL)
        {
                $query = $this->db->get('projects');
                return $query->result_array();
        }

        $query = $this->db->get_where('projects', array('id' => $id));
        return $query->row_array();
}
    public function set_projects()
{
 

    $slug = url_title($this->input->post('title'), 'dash', TRUE);

    $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'text' => $this->input->post('text'),
        //'project_id' => $this->input->post('project_id')
    );

    return $this->db->insert('projects', $data);
}
    
    public function update_projects($id){ 
        $data = array(
        'title' => $this->input->post('title'),
        'text' => $this->input->post('text'),
        
        );
        
         $this->db->update('projects', $data, array('id' => $id));
    }
}