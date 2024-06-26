<?php
class Appoinment_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	public function insert_appoinment($post){
		$this->db->insert('appoinment', $post);
		return $this->db->insert_id();
	}
	public function update_appoinment($appoinment_id, $d){
		$this->db->where('AppoinmentId', $appoinment_id);
		return $this->db->update('appoinment', $d);
	}
	public function get_appoinment_data($appoinment_id){
		$this->db->where('AppoinmentId', $appoinment_id);
		$data = $this->db->get('appoinment');
		return $data->row();
	}
	public function get_toay_appoinmets(){
		$this->db->select('appoinment.*, patient.*, test.*, room.*');
		$this->db->from('appoinment');
		$this->db->join('patient', 'patient.PatientId=appoinment.PatientId');
		$this->db->join('test', 'test.TestId=appoinment.TestId');
		$this->db->where('test.IsDeleted', 0);
		$this->db->where('appoinment.Status>', 0);
		$this->db->where('appoinment.AppoinmentDate', date('Y-m-d'));
		$this->db->order_by('appoinment.AppoinmentId', 'desc');
		$data= $this->db->get();
		return $data->result();
	}
	public function get_all_appoinmets(){
		$this->db->select('appoinment.*, patient.*, test.*');
		$this->db->from('appoinment');
		$this->db->join('patient', 'patient.PatientId=appoinment.PatientId');
		$this->db->join('test', 'test.TestId=appoinment.TestId');
		$this->db->where('test.IsDeleted', 0);
		$this->db->where('appoinment.Status>', 0);
		// $this->db->where('appoinment.AppoinmentDate', date('Y-m-d'));
		$this->db->order_by('appoinment.AppoinmentId', 'desc');
		$data= $this->db->get();
		return $data->result();
	}
	public function get_appointment($appointment_id){
		$this->db->select('appoinment.*, patient.*, test.*');
		$this->db->from('appoinment');
		$this->db->join('patient', 'patient.PatientId=appoinment.PatientId');
		$this->db->join('test', 'test.TestId=appoinment.TestId');
		$this->db->where('test.IsDeleted', 0);
		$this->db->where('appoinment.Status>', 0);
		// $this->db->where('appoinment.AppoinmentDate', date('Y-m-d'));{
		// }
		$this->db->where('appoinment.AppoinmentId', $appointment_id);
		// $this->db->order_by('appoinment.AppoinmentId', 'desc');
		$data= $this->db->get();
		return $data->row();
	}
	public function get_pationts_records(){
		$this->db->select('appoinment.*, patient.*, test.*');
		$this->db->from('appoinment');
		$this->db->join('patient', 'patient.PatientId=appoinment.PatientId');
		$this->db->join('test', 'test.TestId=appoinment.TestId');
		$this->db->where('test.IsDeleted', 0);
		$this->db->where('appoinment.Status>', 0);
		// $this->db->where('appoinment.AppoinmentDate', date('Y-m-d'));
		$this->db->where('appoinment.PatientId', $this->session->patient->PatientId);
		$this->db->order_by('appoinment.AppoinmentId', 'desc');
		$data= $this->db->get();
		return $data->result();
	}
}