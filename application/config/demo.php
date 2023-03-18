<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Samana extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->model('Slider_model');
		$this->load->model('ManageTestimonial_model');
		$this->load->model('Managework_model');
		$this->load->model('ManageInsta_model');
	}

	public function index()
	{
		$data=new stdClass();
		$data->testimonial_list=$this->ManageTestimonial_model->GetActiveTestimonial();
		$data->slider_list=$this->Slider_model->GetActiveSlider();
		$data->product_list=$this->Managework_model->GetActiveProduct();
		$data->insta_list=$this->ManageInsta_model->GetActiveInsta();
		$this->load->view('index',$data);
	}
		public function test()
	{
		$data=new stdClass();
		$data->testimonial_list=$this->ManageTestimonial_model->GetActiveTestimonial();
		$data->slider_list=$this->Slider_model->GetActiveSlider();
		$data->product_list=$this->Managework_model->GetActiveProduct();
		$data->insta_list=$this->ManageInsta_model->GetActiveInsta();
		$this->load->view('index_copy',$data);
	}

	public function slider()
	{
		$data=new stdClass();
		$data->slider_list=$this->Slider_model->GetActiveSlider();
		$this->load->view('index',$data);
	}

	public function product()
	{
		$data=new stdClass();
		$data->product_list=$this->Managework_model->GetActiveProduct();
		$this->load->view('index',$data);
	}

	public function testimonial()
	{
		$data=new stdClass();
		$data->testimonial_list=$this->ManageTestimonial_model->GetActiveTestimonial();
		$this->load->view('index',$data);
	}

	
	
		
	
 public function send()
 {
  $subject = 'Application for Programmer Registration By - ' . $this->input->post("username");
  
  $file_data = $this->upload_file();
  if(is_array($file_data))
  {
   $message =     "<table>
						<tr>
						<th>Name</th>
						<th>Number</th>
						<th>Email</th>
						<th>address</th>
						</tr>
						<tr>
						<td> ".$this->input->post('username')." </td>
						<td> ".$this->input->post('number')." </td>
						<td> ".$this->input->post('email')." </td>
						<td> ".$this->input->post('address')." </td>
						</tr>
						</table>
						";

 

   $config = array(
         
          'protocol'  => 'smtp',
          'smtp_host' => 'ssl://smtp.googlemail.com',
          'smtp_port' => '465',
           'smtp_user' => 'upadhyayanuj387@gmail.com',
          'smtp_pass' => 'frvfqxulvswcfbvx',
          'crlf'  => '\r\n',
          'newline'   => '\r\n'
      );
   //$file_path = 'uploads/' . $file_name;
      $this->load->library('email', $config);
        $this->email->set_mailtype("html");
      $this->email->set_newline("\r\n");
      $this->email->from($this->input->post("email"));
      $this->email->to('upadhyayanuj387@gmail.com');
      $this->email->subject($subject);
         $this->email->message($message);
         $this->email->attach($file_data['full_path']);
         if($this->email->send())
         {
      
           $this->session->set_flashdata('message', 'Application Sended');
           redirect('');
          
         }
         else
         {
         
           $this->session->set_flashdata('message', 'There is an error in email send');
           redirect('Samana');
        
         }
     }
     else
     {
      $this->session->set_flashdata('message', 'There is an error in attach file');
         redirect('Samana');
     }
 }

	
	
	public function send_mail() { 
	//echo "hello";die;
         $from_email = "contact_us@samana.online"; 
         $to_email = $this->input->post('email'); 
   
		 $message =" 
						 ".'Name:  '.$this->input->post('username')."
						 ".'Mobile NUmber:  '.$this->input->post('number')."
						".'Email Address:  '.$this->input->post('email')."
						".'Message:  '.$this->input->post('comments')." ";
		 
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Samana'); 
         $this->email->to($to_email);
         $this->email->subject('Samana Contact us Details'); 
         $this->email->message($message); 
   
         //Send mail 
         if($this->email->send()) {
			 
         $this->session->set_flashdata("success","Email sent successfully."); 
		 redirect(Samana);
		 }
         else {
			 
         $this->session->set_flashdata("success","Error in sending Email."); 
         redirect(Samana); 
		 }
      } 
	 
	  
	  public function send_mail2() { 
         $from_email = $this->input->post('email'); 
         $to_email = "career@samana.online"; 
   
		 $message =" 
						 ".'Name:  '.$this->input->post('username')."
						 ".'Mobile Number:  '.$this->input->post('number')."
						".'Email Address:  '.$this->input->post('email')."
						".'Address:  '.$this->input->post('address')." ";
		 
         //Load email library 
         $this->load->library('email'); 
		 $config['upload_path'] = './uploads/';
              $config['allowed_types'] = 'doc|docx';

             $this->load->library('upload', $config);
             $this->upload->do_upload('resume');
             $upload_data = $this->upload->data();
            
             $this->email->attach($upload_data['full_path']);
             $this->email->set_newline("\r\n");
             $this->email->set_crlf("\r\n");
			 
         $this->email->from($from_email, 'Samana'); 
         $this->email->to($to_email);
         $this->email->subject('Samana Career Details'); 
         $this->email->message($message); 
   
         //Send mail 
         if($this->email->send()) {
			 
         $this->session->set_flashdata("success","Your email sent successfully."); 
		 redirect(Samana);
		 }
         else {
			 
         $this->session->set_flashdata("success","Error in sending Email."); 
         redirect(Samana);
		 }
      } 
	

	
	public function send_mail3() { 
         $from_email = $this->input->post('email'); 
         $to_email = "contact_us@samana.online"; 
   
		 $message =" 
						 ".'Name:  '.$this->input->post('username')."
						 ".'Mobile NUmber:  '.$this->input->post('number')."
						".'Email Address:  '.$this->input->post('email')."
						".'Message:  '.$this->input->post('msg')." ";
		 
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Samana'); 
         $this->email->to($to_email);
         $this->email->subject('Samana Contact Details'); 
         $this->email->message($message); 
   
         //Send mail 
         if($this->email->send()) {
			 
         $this->session->set_flashdata("success","Your email sent successfully."); 
		 redirect('Samana');
		 }
         else {
			 
         $this->session->set_flashdata("success","Error in sending Email."); 
         redirect('Samana');
		 }
      }
	
	
	
}
?>
