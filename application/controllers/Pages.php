<?php
class Pages extends CI_Controller {
	
	public function view($page = 'home')
	{
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}		
		if ( $page == 'home' )
		{
			$data['title'] = 'Bukajasa VIP | SPG Usher &amp; Talent, Event Organizer, PR Consultant, TV &amp; Video Production, Multimedia &amp; IT, Training &amp; Travel'; 
		}
		else {
			$data['title'] = ucfirst($page) . ' | Bukajasa';
		}
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		if ( $page != 'home' )
		{
		//	$this->load->view('templates/sidebar', $data);
		}
		$this->load->view('templates/footer', $data);
	}
}
