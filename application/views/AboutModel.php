<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *  
 */ 
class BlogModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database(); 
	}

	public	function GetBlog(){
		$this->db->from('tbl_blog');
		return $this->db->get()->result_array();
	}
public function Insertblog($post,$file){
		$data=array(
			'title' =>$post['title'],
			'offer' =>$post['offer'],
			'image' =>$file,
			'address' =>$post['address'],
			'name' =>$post['name'],
			 );
		return $this->db->insert('tbl_blog',$data);
	}
	public	function GetUser(){
		$this->db->from('tbl_users');
		return $this->db->get()->result_array();
	}

	public	function GetSubcategory(){
		$this->db->from('tbl_subcategory');
		return $this->db->get()->result_array();
	}

	public	function GetChildcategory(){
		$this->db->from('tbl_childcategory');
		return $this->db->get()->result_array();
	}

	public	function GetEmpById($id){
		$whereclause=array('id'=>$id);
		$this->db->from('tbl_emp')->where($whereclause);
		return $this->db->get()->row();
	}

	public function InsertEmployee($post){
		$data=array(
			'name' =>$post['name'],
			'number' =>$post['number'],
			'email' =>$post['email'],
			'address' =>$post['address'],
			 );
		return $this->db->insert('tbl_emp',$data);
	}
	public function UpdateEmployee($post,$id){
		$data=array(
			'name' =>$post['name'],
			'number' =>$post['number'],
			'email' =>$post['email'],
			'address' =>$post['address'],
			 );
			$this->db->where('id',$id);
		return $this->db->update('tbl_emp',$data);
	}

	public function ActiveInactiveEmployee($id)
	{
		$this->db->set('emp.flag','CASE WHEN emp.flag=0 THEN 1 ELSE 0 END',FALSE)->where('emp.id',$id)->update('tbl_emp as emp');
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE; 

	}
	public function Deleteblog($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_blog');
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	/*Frontend Function*/

	public function GetActiveHome(){
		$this->db->from('tbl_home')->where('flag',1);
		return $this->db->get()->result_array();
	}
	
}

?>