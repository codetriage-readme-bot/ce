<?php

class Account extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
		$this->load->helper('url');
		include APPPATH . 'third_party/style.php';
    }
    
    public function index(){
        
        redirect('account/login');
        
    }
    
    public function logout(){
        $this->aauth->logout();
        redirect('login', 'refresh');
    }
    
    public function login(){
        if($this->aauth->is_loggedin()){
			redirect('dashboard');
		}
        
      if($this->input->post()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if($this->input->post('remember') == 'TRUE'){
				$remember = TRUE;
			}else{
				$remember = FALSE;
			}
			if($this->aauth->login($email, $password, $remember)){
                $this->load->view('account/parts/header');
				redirect('dashboard');
			}else{
                $this->load->view('account/parts/header');
				$this->load->view('account/sign_in');
			}
		}else{
            $this->load->view('account/parts/header');
			$this->load->view('account/sign_in');
		}
        
    }
    
    public function register(){
        if($this->aauth->is_loggedin()){
			redirect('dashboard');
		}
		if($this->input->post()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$name = $this->input->post('name');
			if($this->aauth->create_user($email, $password, $name)){
				$this->aauth->info('Your account has been created successfully and is ready to use. You can use the Login form.');
				redirect('account/login');
			}else{
                $this->load->view('account/parts/header');
				$this->load->view('account/sign_up');
			}
		}else{
            $this->load->view('account/parts/header');
			$this->load->view('account/sign_up');
		}
    }
    
    
    
    public function admin(){
        $this->aauth->create_user('atombt@atombt.com','atompass');
        $this->aauth->create_perm('enterprise_user');
$this->aauth->create_perm('opensource_user');
$this->aauth->create_perm('paid');
$this->aauth->allow_group('enterprise','enterprise_user');
$this->aauth->add_member('2','admin_group');
        
    }
    
    public function remind_password()
	{
		if($this->aauth->is_loggedin()){
			redirect('dashboard');
		}
		if($this->input->post()){
			$email = $this->input->post('email');
			$this->aauth->remind_password($email);
			$this->aauth->info('The Account Verification mail will be sent to your email address.');
			$this->load->view('account/remind_password');
		}else{
			$this->load->view('account/remind_password');
		}
	}
    
    public function reset_password()
	{
		if($this->aauth->is_loggedin()){
			redirect('dashboard');
		}
		if($this->input->post()){
			$user_id = $this->input->post('user_id');
			$ver_code = $this->input->post('verification_code');
			if($this->aauth->reset_password($user_id, $ver_code)){
				$this->aauth->info('A new password will be sent to your email address.');
			}else{
				$this->aauth->error('E-mail Address and Verification Code do not match.');
			}
			$this->load->view('account/reset_password');
		}else{
			$this->load->view('account/reset_password');
		}
	}
    
    public function backup(){
        $this->load->helper('file');
		$this->load->dbutil();
		$prefs = array(
                'format'      => 'zip',             // gzip, zip, txt
                'filename'    => 'database-full-AtomBT-backup_'.date('Y-m-d').'.zip',   
                'add_drop'    => TRUE,              // Whether to add DROP TABLE statements to backup file
                'add_insert'  => TRUE,              // Whether to add INSERT data to backup file
                'newline'     => "\n"               // Newline character used in backup file
              );
        $backup =& $this->dbutil->backup($prefs);
         $this->load->helper('download');
			force_download('database-full-backup_'.date('Y-m-d').'.zip', $backup);
    }
    
}