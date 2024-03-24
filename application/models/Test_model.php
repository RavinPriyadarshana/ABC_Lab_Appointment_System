<?php
class Test_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	public function insert($post)
	{
		return $this->db->insert('test', $post);
	}
	public function get_all()
	{
		$this->db->where('IsDeleted', 0);
		$data = $this->db->get('test');
		return $data->result();
	}
	public function get_data($TestId)
	{
		$this->db->where('TestId', $TestId);
		$data = $this->db->get('test');
		return $data->row();
	}
	public function update($TestId, $post)
	{
		$this->db->where('TestId', $TestId);
		return $this->db->update('test', $post);
	}
}