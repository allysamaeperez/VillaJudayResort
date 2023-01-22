<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	
	public function add()
	{
		
		$viewdata = array();

		if($this->input->post("type") && $this->input->post("price") /*&& $this->input->post("quantity")*/)
		{

			$paymenttype = $this->input->post("paymenttype");
			$price = $this->input->post("price");
			$details = $this->input->post("details");
			// $quantity = $this->input->post("quantity");

			if(count($this->room_m->getRoomType($type))==0) {
				$this->room_m->addRoomType($type, $price, $details);
				redirect("/payment-type");
			}
			else {
				$viewdata['error'] = "Error";
			}
		}

		$data = array('title' => 'Add Payment Type - ', 'page' => 'payment_type');
		$this->load->view('header', $data);
		$this->load->view('room-type/add', $viewdata);
		$this->load->view('footer');
	}

	function delete($payment_type)
	{
		$this->room_m->deletePaymenttype($payment_type);
		redirect("/payment-type");
	}

	public function edit($payment_type)
	{
		if($this->input->post("type") && $this->input->post("price") /*&& $this->input->post("quantity")*/)
		{

			$paymenttype = $this->input->post("paymenttype");
			$price = $this->input->post("price");
			$details = $this->input->post("details");
			// $quantity = $this->input->post("quantity");

			$this->room_m->editRoomType($paymenttype, $price, $details);
			redirect("/payment-type");
		}
		
		$data = array('title' => 'Edit Payment Type - ', 'page' => 'payment_type');
		$this->load->view('header', $data);

		$room_type = $this->room_m->getPaymentType($payment_type);
		
		$viewdata = array('payment_type'  => $payment_type[0]);
		$this->load->view('payment-type/edit',$viewdata);

		$this->load->view('footer');
	}

	public function index()
	{
		$room_types = $this->room_m->get_payment_types();

		$viewdata = array('payment_types' => $payment_types);

		$data = array('title' => 'Rooms - ', 'page' => 'payment_type');
		$this->load->view('header', $data);
		$this->load->view('payment-type/list',$viewdata);
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
