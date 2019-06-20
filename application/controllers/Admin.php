<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $data['contact'] = $this->GetData->get_data('contact_us');
        $this->load->view('admin_login', $data);
    }

    public function login() {
        $email = htmlentities($this->input->post('email'));
        $password = htmlentities($this->input->post('password'));
        $data = $this->LoginModel->AdminLogin($email, $password);
        if ($data == TRUE) {
            $this->session->set_userdata(array(
                'logged_in' => TRUE
            ));
            redirect('Admin/cPanel');
        } else {
            $this->session->set_flashdata('logged_in', 'خطأ فى الاسم او الباسورد حاول مره اخري');
            redirect('Admin');
        }
    }

    public function cPanel() {
        if ($this->session->userdata('logged_in') == TRUE) {

            $data['contact'] = $this->GetData->get_data('contact_us');
            $data['contact_en'] = $this->GetData->get_data('contact_us_en');
            $this->load->view('c_panel', $data);
        } else {
            redirect('Admin');
        }
    }

    public function delete() {
        if ($this->session->userdata('logged_in') == TRUE) {
        $data['contact'] = $this->GetData->get_data('contact_us');
        $data['all_images'] = $this->GetData->get_all_slider('slider');
        $this->load->view('delete', $data);
        } else {
            redirect('Admin');
        }
    }


    public function delete_all() {
        if ($this->session->userdata('logged_in') == TRUE) {
        $data['contact'] = $this->GetData->get_data('contact_us');
        $data['all_images'] = $this->GetData->get_data_ordered('all_images');
        $this->load->view('delete_all_image', $data);
        } else {
            redirect('Admin');
        }
    }

    public function u() {
        if ($this->session->userdata('logged_in') == TRUE) {

            $data['name'] = $this->input->post('name');
            $data['phone'] = $this->input->post('phone');
            $data['email'] = $this->input->post('email');
            $data['address'] = $this->input->post('address');
            $data['about'] = $this->input->post('about');
            $data['fb'] = $this->input->post('fb');
            $data['insta'] = $this->input->post('insta');
            if ($this->GetData->update('contact_us', $data)) {
                $this->session->set_flashdata('update', 'تم تحديث البيانات بنجاح');
                redirect('Admin/cPanel');
            } else {
                $this->session->set_flashdata('update', 'فشل في تحديث البيانات');
                redirect('Admin/cPanel');
            }
        } else {
            redirect('Admin');
        }
    }
        public function u_en() {
        if ($this->session->userdata('logged_in') == TRUE) {

            $data['name'] = $this->input->post('name');
            $data['phone'] = $this->input->post('phone');
            $data['email'] = $this->input->post('email');
            $data['address'] = $this->input->post('address');
            $data['about'] = $this->input->post('about');
            $data['fb'] = $this->input->post('fb');
            $data['insta'] = $this->input->post('insta');
            if ($this->GetData->update('contact_us_en', $data)) {
                $this->session->set_flashdata('update', 'تم تحديث البيانات بنجاح');
                redirect('Admin/cPanel');
            } else {
                $this->session->set_flashdata('update', 'فشل في تحديث البيانات');
                redirect('Admin/cPanel');
            }
        } else {
            redirect('Admin');
        }
    }

    public function image() {
        if ($this->session->userdata('logged_in') == TRUE) {
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|png|jpg|jpeg';
        $config['max_size'] = 10000;
        $config['max_width'] = 10024;
        $config['max_height'] = 7468;
        $temp = explode(".", $_FILES["pic"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!move_uploaded_file($_FILES["pic"]["tmp_name"], "images/" . $newfilename)) {
            echo $this->upload->display_errors();
        } else {
            $d['image'] = $newfilename;
            $this->db->insert('all_images', $d);
            $this->session->set_flashdata('upload', 'تم رفع الصوره بنجاح');
            redirect('Admin/cPanel');
        }
         } else {
            redirect('Admin');
        }
    }

    public function slider() {

        if ($this->session->userdata('logged_in') == TRUE) {
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'gif|png|jpg|jpeg';
        $config['max_size'] = 10000;
        $config['max_width'] = 10024;
        $config['max_height'] = 7468;
        $temp = explode(".", $_FILES["pic"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!move_uploaded_file($_FILES["pic"]["tmp_name"], "images/" . $newfilename)) {
            echo $this->upload->display_errors();
        } else {
            $d['image'] = $newfilename;
            $this->db->insert('slider', $d);
            $this->session->set_flashdata('upload', 'تم رفع الصوره بنجاح');
            redirect('Admin/cPanel');
        }
        } else {
            redirect('Admin');
        }
    }

    public function offer() {
        if ($this->session->userdata('logged_in') == TRUE) {
        $config['upload_path'] = 'images/offer/';
        $config['allowed_types'] = 'gif|png|jpg|jpeg';
        $config['max_size'] = 10000;
        $config['max_width'] = 10024;
        $config['max_height'] = 7468;
        $temp = explode(".", $_FILES["pic"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!move_uploaded_file($_FILES["pic"]["tmp_name"], "images/offer/" . $newfilename)) {
            echo $this->upload->display_errors();
        } else {
            $d['image'] = $newfilename;
            $d['title'] = $this->input->post('title');
            $d['description'] = $this->input->post('description');
            $this->db->insert('offers', $d);
            $this->session->set_flashdata('offer', 'تم رفع الاعلان بنجاح');
            redirect('Admin/cPanel');
        }
        } else {
            redirect('Admin');
        }
    }

    public function delete_image($id) {
        if ($this->session->userdata('logged_in') == TRUE) {
        if ($this->GetData->delete($id)) {
            $this->session->set_flashdata('delete', 'تم حذف الصوره بنجاح');
            redirect('Admin/delete');
        } else {
            $this->session->set_flashdata('delete', 'لم يتم الحذف خطأ');
            redirect('Admin/delete');
        }
        } else {
            redirect('Admin');
        }
    }

    public function all_image_delete($id) {
        if ($this->session->userdata('logged_in') == TRUE) {
        if ($this->GetData->delete_all($id)) {
            $this->session->set_flashdata('delete', 'تم حذف الصوره بنجاح');
            redirect('Admin/delete_all');
        } else {
            $this->session->set_flashdata('delete', 'لم يتم الحذف خطأ');
            redirect('Admin/delete_all');
        }
        } else {
            redirect('Admin');
        }
    }
    public function ar_lang() {
        $this->session->set_userdata(array('lang'=>'ar'));
        redirect('Home');
    }
     public function en_lang() {
       $this->session->set_userdata(array('lang'=>'en'));
       redirect('Home');
    }

    public function logout() {

        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id');

        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('Admin');
    }

}
