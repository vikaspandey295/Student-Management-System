<?php
 class Query_model extends CI_Model
 {
    public function __construct()
    {
        parent::__construct();
    }
    public function RegisterModel($data)
    {
    	$this->db->insert('crud_application',$data);
    }
    public function selectRecordsModel()
    {
    	$query = $this->db->get('crud_application');  
        return $query; 	
    }
    public function GetUsersID($GetuserID)
    {
        $this->db->where('id', $GetuserID);
        $sql = $this->db->get('crud_application');
        return $sql;
    }
    public function EditStudentRecord2($formdata, $edituserID)
    {
        $this->db->where('id', $edituserID);
        $this->db->update('crud_application',$formdata);
        //echo $this->db->last_query();
    }
    public function DeleteRecords($userId)
    {
        $this->db->where('id', $userId);
        $this->db->delete('crud_application');
        $this->session->set_flashdata('msg','Record Successfully Deleted...');
        redirect('Welcome/ShowRecords'); 
    }
 }
?>