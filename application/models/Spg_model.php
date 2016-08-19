<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Spg_model extends CI_Model {

	public function __construct()
	{
	//	parent::__construct();
		$this->load->database();
	}
	public function record_count() {
		return $this->db->count_all("spg");
	}
	public function get_data($limit, $offset) {
		$this->db->limit($limit, $offset);
		$data = $this->db->get("spg");

		if ($data->num_rows() > 0) {
			return $data->result();
		}
	}

	public function get_spg($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('spg');
            return $query->result_array();
        }
        $query = $this->db->get_where('spg', array('slug' => $slug));
        return $query->row_array();
	}

	public function set_spg()
	{
		$this->load->helper('url');
		$slug = url_title($this->input->post('name'), 'dash', TRUE);
		$data = array(
			'name' => $this->input->post('name'),
			'slug' => $slug,
		);
		return $this->db->insert('spg', $data);
	}

}