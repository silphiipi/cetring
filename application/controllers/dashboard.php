<?php  

class Dashboard extends CI_Controller{

    public function index()
    {
        $data['menu'] =$this->model_menu->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer');
    }
}