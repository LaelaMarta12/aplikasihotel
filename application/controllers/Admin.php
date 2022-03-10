<?php
    class Admin extends CI_Controller{
        function index(){

            $data['judul'] = "Dashboard";

            $this->load->view('partisi_back/head');
            $this->load->view('partisi_back/navbar');
            $this->load->view('partisi_back/sidebar');
            $this->load->view('partisi_back/breadcumb');
            $this->load->view('hotel_v/index');
            $this->load->view('partisi_back/footer');
            $this->load->view('partisi_back/js');
        }
    }
?>