<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function index() {

        $this->load->view('my_order');
    }

    public function delete_order() {
        unset($_SESSION['order']);
        $this->session->set_flashdata('delete_order', ':تم الغاء الطلب بنجاح ::');
        redirect("Order");
    }

    public function delete_food($food_id) {
        if(count($_SESSION['order']) == 1)
        {
           unset($_SESSION['order']); 
        }
        $f=FALSE;
        $a=0;
        for ($i = 0; $i < count($_SESSION['order']); $i++) {
            if ($_SESSION['order'][$i]['food_id'] == $food_id) {
                $f = TRUE;
                $a = $i;
            }
        }
        unset($_SESSION['order'][$a]);
        $this->session->set_flashdata('delete_food', ':تم حذف الصنف بنجاح ::');
        redirect("Order");
    }
    public function complete_order() {
        if (!empty($_SESSION['order']))
        {
            $this->load->view('complete_order');
        }
        else
        {
            echo 'لا يوجد طلب لديك';
        }
    }

}
