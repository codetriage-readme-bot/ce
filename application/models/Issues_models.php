<?php

class Issues_Models extends CI_Model{
    
    public function get_issues($id = NULL)
{
        if ($id === NULL)
        {
                $query = $this->db->get('issue');
                return $query->result_array();
        }

        $query = $this->db->get_where('issue', array('id' => $id));
        return $query->row_array();
}
   public function set_issues()
{
 

    $slug = url_title($this->input->post('title'), 'dash', TRUE);

    $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'text' => $this->input->post('text'),
        'project' => $this->input->post('project'),
        'milestone' => $this->input->post('milestone'),
        'type' => $this->input->post('type')
    );

    return $this->db->insert('issue', $data);
}
    
    public function update_issues($id){ 
        $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'text' => $this->input->post('text'),
        'project' => $this->input->post('project'),
        'milestone' => $this->input->post('milestone'),
        'type' => $this->input->post('type')
        );
        
         $this->db->where('id',$id);
        return $this->db->update('issue',$data);
    }
    
    public function get_type(){
        $query = $this->db->get('type');
        return $query->result_array();
    }
}