<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Query_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('vikas/student_registration');
		}
		else
		{
			$registration_date = date("d-m-Y");
		    $data=array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'password' => $this->input->post('password'),
			'created_date' => $registration_date
		);
		    $this->Query_model->RegisterModel($data);
		    $this->session->set_flashdata('msg', 'Records Save Successfully...');
		    redirect('Welcome');
		}
	}

	public function ShowRecords()
	{
		$store['store'] = $this->Query_model->selectRecordsModel();   
        $this->load->view('vikas/student_records', $store);
	}

	public function EditRecords($edituserID)
	{

		$data['users'] = $this->Query_model->GetUsersID($edituserID);
		$this->load->view('vikas/EditRecord', $data);

		if($this->input->post('update'))
		{
        
	    $formdata = array(
         	'name' => $this->input->post('name'),
		 	'email' => $this->input->post('email'),
		 	'phone' => $this->input->post('phone'),
		 	'password' => $this->input->post('password')
        );
        $this->Query_model->EditStudentRecord2($formdata, $edituserID);
        $this->session->set_flashdata('msg','Update Record Successfully');
        redirect('Welcome/ShowRecords');
		}
	}

	public function DeleteRow($userID)
	{
		$this->load->model('Query_model');
		$this->Query_model->DeleteRecords($userID);
		$this->Query_model->DeleteRecords();
	}
}
?>