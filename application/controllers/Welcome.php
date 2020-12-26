<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('welcome_message', $data);
		$this->load->view('templates/footer');
	}
	public function tambah_ke_keranjang($id){
		$barang = $this->model_barang->find($id);
		$data = array(
			'id'      => $barang->id_brg,
			'qty'     => 1,
			'price'   => $barang->harga,
			'name'    => $barang->nama_brg,
	);
	
	$this->cart->insert($data);
	redirect('Welcome');
	}
	public function detail_keranjang(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}
	public function hapus_keranjang(){
		$this->cart->destroy();
		redirect('../');
	}
	public function pembayaran(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}
	public function proses_pesanan(){
		$this->cart->destroy();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('proses_pesanan');
		$this->load->view('templates/footer');
	}
}
