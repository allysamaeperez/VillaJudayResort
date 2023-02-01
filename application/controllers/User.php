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
        //$this->load->view('User/home');

        $data = [
            'firstname'=> $this->input->post('firstname'),
            'lastname'=> $this->input->post('lastname'),
            'phone_number'=> $this->input->post('phone_number'),
            'departure_date'=> $this->input->post('departure_date'),
            'email'=> $this->input->post('email'),
            'arrival_date'=> $this->input->post('arrival_date'),
            'room_type'=> $this->input->post('room_type'),
            'guest'=> $this->input->post('guest')
        ];

        $this->db->insert('appointment', $data);
        $this->session->flashdata('success');
		redirect('User/index');
}

public function reservation() 
    {
        $booking = new Booking();
        $data['booking'] = $booking->findAll();
        return view('user/home', $data);
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
        return redirect()->to('booknow')->with('success', 'Your Book has been submitted.');
    }
	public function edit($id)
    {
        $booking = new Booking();
        $data['booking'] = $booking -> find($id);
        return view('user/home', $data);
    }

public function update($id)
    {
        $booking = new Booking();
        

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

        $booking->update($id, $data);
        return redirect()->to('user/home')->with('success', 'Reservation has been updated.');
    }
}
