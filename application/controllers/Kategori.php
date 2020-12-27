<?php

class Kategori extends CI_Controller{
    public function tshirt()
    {
        $data['tshirt'] = $this->model_kategori->
            data_tshirt()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tshirt',$data);
        $this->load->view('templates/footer');
    }
    public function shirt()
    {
        $data['shirt'] = $this->model_kategori->
            data_shirt()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('shirt',$data);
        $this->load->view('templates/footer');
    } public function jacket()
    {
        $data['jacket'] = $this->model_kategori->
            data_jacket()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('jacket',$data);
        $this->load->view('templates/footer');
    }
}