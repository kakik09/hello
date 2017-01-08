<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminhome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function processLogin()
	{
		// die(var_dump($_POST['username']));
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('User_model');
		if ($this->User_model->check($username, $password)){
			$this->load->view('adminhome');
		}
		else{
			$data = array('username'=>$username, 'password'=> $password, 'hash'=>md5($password));
			$this->load->view('errorsplash',$data);
		}
	}
}
