<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function index() {
        $this->load->view('login_form');
    }

    public function register() {
        $this->load->view('register_form');
    }

    public function log() {
        if (isset($_POST)) {
            $this->form_validation->set_rules('email', 'Email', 'xss_clean|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'xss_clean|required');
            if ($this->form_validation->run() == TRUE) {
                $email = htmlentities(htmlspecialchars($this->input->post('email')));
                $password = htmlentities(htmlspecialchars($this->input->post('password')));
                $data = $this->LoginModel->login($email, $password);
                if ($data) {
                    $this->session->set_userdata(array(
                        'email' => $email,
                        'id' => $data['id'],
                        'name' => $data['name'],
                        'logged_in' => TRUE
                    ));
                    $this->session->set_flashdata('logged_in', 'You are logged in now !');
                    redirect('Home');
                } else {
                    $this->session->set_flashdata('logged_in', 'uncoreect password or email plz try again!');
                    redirect('Login');
                }
            } else {
                redirect('Login');
            }
        } else {
            echo 'sorry';
        }
    }

    public function reg() {


        if (isset($_POST)) {
            $this->form_validation->set_message('regex_match', 'The password must contain at least one upper alphapet and number');
            $this->form_validation->set_message('xss_clean', 'dangerous!! bad request');

            $this->form_validation->set_message('is_unique', 'The  email is already Exists please try another email');
            $this->form_validation->set_message('is_unique', 'The  name of restaurant is already Exists please try another name');
            $this->form_validation->set_rules('rest_name', 'rest_name', 'xss_clean|required|is_unique[restaurant.restaurant_name]|min_length[1]|max_length[100]');
            $this->form_validation->set_rules('email', 'Email', 'xss_clean|required|valid_email|trim|is_unique[restaurant.email]');
            $this->form_validation->set_rules('password', 'Password', 'xss_clean|required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]|min_length[6]');
            $this->form_validation->set_rules('address', 'address', 'xss_clean|required|min_length[3]|max_length[250]');
            $this->form_validation->set_rules('telephone', 'telephone', 'xss_clean|required|trim|numeric|min_length[3]|max_length[20]');
            $config['upload_path'] = 'uploads/rest_images/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 1000;
            $config['max_width'] = 1024;
            $config['max_height'] = 7468;
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ($this->upload->do_upload('pic')) {
                $data['image'] = base_url() . "uploads/rest_images/" . $this->upload->data('file_name');
            } else {
                $err['error'] = $this->upload->display_errors();
            }

            if ($this->form_validation->run() == FALSE) {
                $err['restaurant_name'] = $this->input->post('rest_name');
                $err['password'] = $this->input->post('password');
                $err['phone'] = $this->input->post('telephone');
                $err['email'] = $this->input->post('email');
                $err['address'] = $this->input->post('address');
                $this->load->view('register_form', $err);
            } else {
                //`id`, `email`, `password`, `image`, `restaurant_name`, `phone`, `address`
                $data['restaurant_name'] = htmlspecialchars($this->input->post('rest_name'));
                $data['password'] = sha1($this->input->post('password'));
                $data['phone'] = $this->input->post('telephone');
                $data['email'] = $this->input->post('email');
                $data['address'] = htmlspecialchars($this->input->post('address'));

                if ($this->LoginModel->reg($data) == TRUE) {
                    $this->session->set_flashdata('register', 'you are register Successfully Login Now!');
                    redirect('Login');
                } else {
                    $this->session->set_flashdata('register', 'Failled to Register plz try again');
                    redirect('Login/reg');
                }
            }
        } else {
            echo 'sorry';
        }
    }

    public function logout() {
        $GLOBALS['log'] = 'false';
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('Login');
    }

}
