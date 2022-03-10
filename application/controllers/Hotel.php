<?php
    class Hotel extends CI_Controller{

        function index(){
            $this->load->view('partisi_back/head');
            $this->load->view('partisi_back/navbar');
            $this->load->view('partisi_back/sidebar');
            $this->load->view('partisi_back/breadcumb');
            $this->load->view('hotel_v/index');
            $this->load->view('partisi_back/footer');
            $this->load->view('partisi_back/js');
        }
        function kamar(){
            $this->load->view('partisi_back/head');
            $this->load->view('partisi_back/navbar');
            $this->load->view('partisi_back/sidebar');
            $this->load->view('partisi_back/breadcumb');
            $this->load->view('hotel_v/kamar');
            $this->load->view('partisi_back/footer');
            $this->load->view('partisi_back/js');
        }
        function harga(){
            $this->load->view('partisi_back/head');
            $this->load->view('partisi_back/navbar');
            $this->load->view('partisi_back/sidebar');
            $this->load->view('partisi_back/breadcumb');
            $this->load->view('hotel_v/harga');
            $this->load->view('partisi_back/footer');
            $this->load->view('partisi_back/js');
        }
        function transaksi(){
            $this->load->view('partisi_back/head');
            $this->load->view('partisi_back/navbar');
            $this->load->view('partisi_back/sidebar');
            $this->load->view('partisi_back/breadcumb');
            $this->load->view('hotel_v/transaksi');
            $this->load->view('partisi_back/footer');
            $this->load->view('partisi_back/js');
        }
    }
?>