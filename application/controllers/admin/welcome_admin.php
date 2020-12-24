<?php

class Welcome_admin extends CI_Controller{
    public function index()
    {
        $this->load->view('templates_admin/header'); 
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/welcome');
        $this->load->view('templates_admin/footer');
    }
    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang->find($id);
        $data = array(
                'id'      => $barang->id_brg,
                'qty'     => 1,
                'price'   => $barang->harga,
                'name'    => $barang->nama_brg,
                
        );
        
        $this->cart->insert($data);
        redirect('welcome_message');
    }
}