<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->helper('functions');

        $data['slider'] = $this->GetData->get_slider('slider');
        $data['offers'] = $this->GetData->get_offer('offers');
        if ($this->session->userdata('lang') == 'en') {
            $data['contact'] = $this->GetData->get_data('contact_us_en');
        } else {

            $data['contact'] = $this->GetData->get_data('contact_us');
        }
        $this->load->view('home', $data);
    }

    public function contact() {

        if ($this->session->userdata('lang') == 'en') {
            $data['contact'] = $this->GetData->get_data('contact_us_en');
        } else {

            $data['contact'] = $this->GetData->get_data('contact_us');
        }
        $this->load->view('contact', $data);
    }

    public function about() {

        if ($this->session->userdata('lang') == 'en') {
            $data['contact'] = $this->GetData->get_data('contact_us_en');
        } else {

            $data['contact'] = $this->GetData->get_data('contact_us');
        }
        $this->load->view('about', $data);
    }

    public function all_images() {
        if ($this->session->userdata('lang') == 'en') {
            $data['contact'] = $this->GetData->get_data('contact_us_en');
        } else {

            $data['contact'] = $this->GetData->get_data('contact_us');
        }

        $data['all_images'] = $this->GetData->get_data_ordered('all_images');
        $this->load->view('all_images', $data);
    }

    public function mail() {
        if (isset($_POST)) {
            $this->form_validation->set_rules('username', 'Username', 'xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'xss_clean');
            $this->form_validation->set_rules('subject', 'Subject', 'xss_clean');
            $this->form_validation->set_rules('message', 'Message', 'xss_clean');
            if ($this->form_validation->run() == TRUE) {
                $email = htmlentities(htmlspecialchars($this->input->post('email')));
                $username = htmlentities(htmlspecialchars($this->input->post('username')));
                $message = htmlentities(htmlspecialchars($this->input->post('message')));
                $subject = htmlentities(htmlspecialchars($this->input->post('subject')));


                $config = Array(
                    'mailtype' => 'html',
                    'charset' => 'utf-8',
                    'priority' => '1'
                );
                $this->load->library('email', $config);
                
                $this->email->set_newline("\r\n");

                $this->email->from($email, $username);
                $this->email->to('ali@senyar-gulf.com');
                $this->email->subject($subject);
                $this->email->message($message);
                if ($this->email->send()) {
                    $data['contact'] = $this->GetData->get_data('contact_us');
                    $data['s'] = 1;
                    $this->load->view('mail', $data);
                } else {
                    $data['s'] = 0;
                    $data['contact'] = $this->GetData->get_data('contact_us');
                    $this->load->view('mail', $data);
                }
            } else {
                redirect('Home');
            }
        } else {
            echo 'access denied!';
        }
    }

}
