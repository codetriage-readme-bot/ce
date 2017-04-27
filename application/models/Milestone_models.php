<?php

class Milestone_models extends CI_Model{
    
    public function get_milestone($id = NULL)
{
        if ($id === NULL)
        {
                $query = $this->db->get('milestone');
                return $query->result_array();
        }

        $query = $this->db->get_where('milestone', array('id' => $id));
        return $query->row_array();
        
        
}
    public function set_milestone()
{
 

    $slug = url_title($this->input->post('title'), 'dash', TRUE);

    $data = array(
        'title' => $this->input->post('title'),
        'text' => $this->input->post('text')
        
    );

    return $this->db->insert('milestone', $data);
}
    
    public function update_milestone($id){ 
        $data = array(
        'title' => $this->input->post('title'),
        'text' => $this->input->post('text'),
        
        );
        
         $this->db->update('milestone', $data, array('id' => $id));
    }
    
    public function delete_milestone($id){
        echo "This function is unimplemented. We are working on this. You will find this function in the next version \n Thanks for understanding.";
    }
}