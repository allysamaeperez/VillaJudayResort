<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    public function index() {
        $this->load->helper('url');
		$this->load->view('User/home');
		
	}
    public function home() {
        $this->load->helper('url');
		$this->load->view('User/site');
		
	}
    public function add_booking(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->view('User/home');
		$firstname = ('firstname');
		$lastname = ('lastname');
		$phone_number =('phone_number');
		$departure_date =('departure_date');
        $email = ('email');
        $arrival_date = ('arrival_date');
        $room_type = ('room_type');

        $data['firstname'] = 'firstname';
       

        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
         if($this->form_validation->run()){
            $data = $this->input->post();
         	$this->load->model('Admin');
            $result = $this->admin->add_booking();
         	if ($this->Admin->add_booking($firstname,$lastname,$phone_number,$departure_date,$email,$arrival_date,$room_type)==true){
         		$_SESSION['status']="Added Successfully";
				$_SESSION['status_code']="success";
         	}
         }
         else{
         		$_SESSION['status']="Record not saved";
				$_SESSION['status_code']="error";
         }


		redirect('User/index');

}

public function reservation() 
    {
        $booking = new Booking();
        $data['booking'] = $booking->findAll();
        return view('admin_dashboard/reservation', $data);
    }
public function save()
    {
        $booking =new Booking();


        $data = [
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'phonenumber' => $this->request->getPost('phonenumber'),
            'email' => $this->request->getPost('email'),
            'departuredate' => $this->request->getPost('departuredate'),
            'arrivaldate' => $this->request->getPost('arrivaldate'),
            'no_guest' => $this->request->getPost('no_guest'),
            'roomtype' => $this->request->getPost('roomtype'),
        ];

        $booking->save($data);
        return redirect()->to('booknow')->with('success', 'Your Book has been submitted. Wait for the Confirmation.');
    }
}
