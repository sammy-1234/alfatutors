<?php
class Registerform extends CI_Controller
{
	public function index()
	{
		$name= $this->input->post('name');
		$mail = $this->input->post('mail');
		$contact = $this->input->post('contact');
		$tutorid=$this->input->post('tutorid');
		$name=strtoupper($name);
		//adding info to registration database
		$this->db->insert('registrations',array(
             'tid' =>$tutorid,
             'name'=>$name,
             'mail'=>$mail,
             'contact'=>$contact
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