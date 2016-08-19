<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Spg extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('spg_model');
        $this->load->library('pagination');
	}

	public function index($offset = NULL)
    {
		$config["base_url"] = base_url() . "/spg/index";
		$config["total_rows"] = $this->spg_model->record_count();
		$config["per_page"] = 12;
		$config["uri_segment"] = 3;
		$page = ($this->uri->segment(3) ? $this->uri->segment(3): 0);
		$data['offset'] = $offset;
	    $data['results'] = $this->spg_model->get_data($config["per_page"], $offset);
	
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

	    $this->pagination->initialize($config);
		$data["links"] = $this->pagination->create_links();

        $data['title'] = 'SPG Usher &amp; Talent';

        $this->load->view('templates/header', $data);
        $this->load->view('/spg/index', $data);
        $this->load->view('templates/footer');
	}

	public function view($slug = NULL)
    {
        $data['spg_item'] = $this->spg_model->get_spg($slug);

        if (empty($data['spg_item']))
        {
                show_404();
        }
        $data['name'] = $data['spg_item']['name'];
        $data['title'] = $data['name'] . ' | Bukajasa.co.id';

        $this->load->view('templates/header', $data);
        $this->load->view('spg/view', $data);
        $this->load->view('templates/footer');
	}
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Input Nama SPG';

		$this->form_validation->set_rules('name', 'Name', 'required');
	//	$this->form_validation->set_rules('text', 'Text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('spg/create');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->spg_model->set_spg();
			$this->load->view('templates/header', $data);
			$this->load->view('spg/success');
			$this->load->view('templates/header', $data);
		}
	}
}