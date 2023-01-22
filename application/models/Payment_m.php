<?php

class Payment_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_payment_types()
    {
        $query = $this->db->get('payment_type');
        $data = array();

        if($query)
            foreach ($query->result() as $row)
            {
                $data[] = $row;
            }
        if(count($data))
            return $data;
        return false;
    } 
    function get_payments()
    {
        $query = $this->db->order_by('payment_id')->get('payment');
        $data = array();

        $i=-1;
        foreach (@$query->result() as $row)
        {
            if($i==-1 || $data[$i]->payment_type != $row->payment_type || $data[$i]->max_id+1!=$row->payment_id) {
                $i++;
                $data[$i]= (object)['payment_type', 'min_id', 'max_id'];
                $data[$i]->payment_type = $row->payment_type;
                $data[$i]->min_id = intval($row->payment_id);
                $data[$i]->max_id = intval($row->payment_id);
            } else {
                $data[$i]->max_id ++;
            }
        }
        if(count($data))
            return $data;
        return false;
    }

    function addPaymentType($payment_type, $price, $details)
    {
        $data = array('payment_type' => $type, 'price' => $price, 'details' => $details);
        $this->db->insert('payment_type', $data);
        return $this->db->affected_rows();
    }

    function deletePaymemntType($payment_type)
    {
        $this->db->delete('payment_type', array('payment_type' => $payment_type));
        return $this->db->affected_rows();
    }

    function getPaymentType($payment_type)
    {
        $query = $this->db->get_where('payment_type', array('payment_type' => $payment_type));
        return $query->result();
    }

    function editPaymentType($payment_type, $price, $details)
    {
        $data = array('payment_type' => $payment_type, 'price' => $price, 'details' => $details);

        $this->db->where('payment_type', $type);
        $this->db->update('payment_type', $data); 
    }

    function getPayment($payment_type)
    {
        $query = $this->db->get_where('payment', array('payment_type' => $payment_type));
        return $query->result();
    }

    
}
