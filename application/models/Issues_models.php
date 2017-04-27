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
    
    public function get_issues_fixed(){
        $query = $this->db->get_where('issue',array('status' => 'fixed'));
        return $query->result_array();
    }
    
    public function get_issues_status($status){
        /* This is unimplemented, we will re-write this */
        $query = $this->db->get_where('issue',array('status' => $status));
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
       // 'slug' => $this->input->post('slug'),
        'text' => $this->input->post('text'),
        'project' => $this->input->post('project'),
        'milestone' => $this->input->post('milestone'),
        'type' => $this->input->post('type')
        );
        
         $this->db->update('issue', $data, array('id' => $id));
    }
    
    public function get_type(){
        $query = $this->db->get('type');
        return $query->result_array();
    }
    
    public function resolve_issue( $issue_id )
	{
		$this->_set_last_update( $issue_id );
		return $this->db->where('id', $issue_id)->limit(1)->update('issues', array('resolved' => 1));				
	}	
}