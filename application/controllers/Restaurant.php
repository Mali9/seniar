<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant extends CI_Controller {

    public function view_rest($rest_id) {
        //unset($_SESSION['order']);

        $data['cats'] = $this->GetData->get_cat_by_id($rest_id);
        $data['rest_info'] = $this->GetData->get_rest_by_id($rest_id);
        $this->load->view('rest_view', $data);
    }

    public function ajax($rest_id, $cat_id) {

        $food = array();
        $food = $this->GetData->get_food($rest_id, $cat_id);
        $arr[] = array("food" => $food['name']);
        $arr[] = array("price" => $food['price']);
        $arr[] = array("id" => $food['id']);
        //print_r($food['id']);
        echo json_encode($arr);
    }

    public function add_to_order() {
        if (isset($_POST['submit'])) {
            // $this->input->post("rest_id")."<br>".$this->input->post("food_id")."<br>".$this->input->post("q");

            $food_id = $this->input->post("submit");
            $rest_id = $this->input->post("rest_id");
            $quantity = $this->input->post("q");
            $p = 1;

            $f = FALSE;
            $a = 1;
            if (isset($_SESSION['order'])) {
                if (isset($_SESSION['rest_id']) && $_SESSION['rest_id']['rest_id'] == $rest_id) {


                    for ($i = 0; $i < count($_SESSION['order']); $i++) {
                        if ($_SESSION['order'][$i]['food_id'] == $food_id) {
                            $f = TRUE;
                            $a = $i;
                        }
                    }
                    if ($f) {
                        $q = $this->GetData->get_food_by_id($food_id);
                        foreach ($q as $value) {
                            $p = $value->price;
                        }

                        $_SESSION['order'][$a]['quantity'] += $quantity;
                        $_SESSION['order'][$a]['food_price'] = $_SESSION['order'][$a]['quantity'] * $p;
                    } else {
                        $q = $this->GetData->get_food_by_id($food_id);
                        foreach ($q as $value) {

                            $_SESSION['order'][] = array(
                                'rest_id' => $rest_id,
                                'food_id' => $food_id,
                                'quantity' => $quantity,
                                'food_name' => $value->food_name,
                                'food_price' => $quantity * $value->price,
                            );
                        }
                    }
                } else {
                    $this->session->set_flashdata('rest exist', 'يجب ان تنهي هذا الطلب اولا قبل ان تبدأ في طلب اخر ');
                    redirect("Restaurant/view_rest/$rest_id");
                }
            } else {
                $q = $this->GetData->get_food_by_id($food_id);
                foreach ($q as $value) {

                    $_SESSION['order'][] = array(
                        'food_id' => $food_id,
                        'quantity' => $quantity,
                        'food_name' => $value->food_name,
                        'food_price' => $quantity * $value->price,
                    );
                }
                $_SESSION['rest_id'] = array('rest_id' => $rest_id);
            }
            $this->session->set_flashdata('add_food', '::تمت اضافه الصنف الى الطلب بنجاح::');
            redirect("Restaurant/view_rest/$rest_id");

            //print_r($_SESSION['order']);
            //print_r($_SESSION['rest_id']);
        } else {
            echo 'error';
        }
    }

}
