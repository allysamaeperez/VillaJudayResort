<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
class Admin extends Model {
    public function __construct(){
    $this->load->database();
    }

public function add_booking($firstname,$lastname,$phone_number,$departure_date,$email,$arrival_date,$room_type,$guest){
        $data=array(
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'phone_number'=>$phone_number,
            'departure_date'=>$departure_date,
            'email'=>$email,
            'arrival_date'=>$arrival_date,
            'room_type'=>$room_type,
            'guest'=>$guest
        );
       $this->db->insert('appointment', $data);
        return $query->result();

}
}
?>