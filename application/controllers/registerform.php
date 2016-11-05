<?php
class Registerform extends CI_Controller
{
	public function index()
	{
		$name= $this->input->post('name');
		$tutorid=$this->input->post('tutorid');
		$name=strtoupper($name);
		//adding info to registration database
		$this->db->insert('registrations',array(
             'tid' =>$tutorid,
             'name'=>$name
			));
		//incrementing popularity of tutor by 1
		$this->db->query("
          UPDATE filters
          SET popularity = popularity +1
          WHERE id = '".$tutorid."'
			");

		$a = $this->db->
				where(array('id'=>$tutorid))->
				get('filters')->
				result_array();


		$this->load->view('registerview',array(
           'name'=>$name,
           'tutor'=>$a
			));
	}
}
?>