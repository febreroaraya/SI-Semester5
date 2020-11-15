<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller{
    function __construct(){
		parent::__construct();		
		// $this->load->model('M_produk');
		// $this->load->model('M_profil');
		// $this->load->model('M_pesanan');
		$this->load->library('upload');
		$this->load->helper(array('url'));
		// if($this->session->userdata('status') != "login"){
		// 	echo "<script>
        //         alert('Anda harus login terlebih dahulu');
        //         window.location.href = '".base_url('Login')."';
        //     </script>";//Url tujuan
		// }
		
	}


    public function index() {
        
		
        $this->load->view('store/v_landing');
	}
	public function daftarproduk(){
		$this->load->view('store/v_store');
	}


	public function detailproduk(){
		$this->load->view('store/v_detailproduk');
	}
	public function detailkeranjang(){
		$this->load->view('store/v_detailproduk');
	}
	public function checkout(){
		$this->load->view('store/v_checkout');
	}
	
	
	
}
?>
