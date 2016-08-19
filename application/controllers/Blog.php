<?php
class Blog extends CI_Controller {

	public function index()
	{
		$data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
		
		$data['title'] = "My Blog";
		$data['heading'] = "This is My Blog";

		$this->load->view('templates/header', $data);
        $this->load->view('blogview', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/footer', $data);
	}
	public function comments()
	{
		echo "This is comments!";
	}
}

		