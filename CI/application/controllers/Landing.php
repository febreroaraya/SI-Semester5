<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller{
    function __construct(){
		parent::__construct();		
		$this->load->model('M_produk');
		$this->load->model('M_profil');
		$this->load->model('M_pesanan');
		$this->load->library('upload');
		$this->load->helper(array('url'));
		if($this->session->userdata('status') != "login"){
			echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '".base_url('Login')."';
            </script>";//Url tujuan
		}
		
	}


    public function index() {
        
        $data['kategori'] = $this->M_produk->tampil_kategori();
		// $data['produk'] = $this->M_produk->tampil_produk3();
		// $data['produk2'] = $this->M_produk->tampil_produk4();
		// $data['produk3'] = $this->M_produk->tampil_produk5();
        $this->load->view('landing/index', $data);
	}
	
	public function tambah_ke_keranjang() 
	{
		// $produk = $this->M_produk->find($id_produk);

		$data = array(
			'id'      => $this->input->post('id_produk'),
			'qty'     => $this->input->post('stok'),
			'price'   => $this->input->post('harga'),
			'name'    => $this->input->post('nama_produk'),
			'berat'    => $this->input->post('berat'),
			'idpesan' => $this->M_pesanan->get_idpesan()
	);
		$this->cart->insert($data);
		redirect('Landing');
	}

	public function detail_keranjang()
	{
		$iduser = $this->session->userdata("iduser");
		$data['pelanggan'] = $this->M_profil->kostumer($iduser);
		$this->load->view('landing/keranjang', $data);
	}

	public function hapus_keranjang()
	{
		// $this->cart->contents(['id']);
		$this->cart->destroy();
		redirect('Landing/detail_keranjang');
	}
	
	function getCity($province){		

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://api.rajaongkir.com/basic/city?province=$province",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "key: fbd791dbdaa5ed2f93cd83f0f68887ef"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  //echo $response;
			$data = json_decode($response, true);
		  //echo json_encode($k['rajaongkir']['results']);

		  
		  for ($j=0; $j < count($data['rajaongkir']['results']); $j++){
		  

		    echo "<option value='".$data['rajaongkir']['results'][$j]['city_id']."'>".$data['rajaongkir']['results'][$j]['city_name']." (".$data['rajaongkir']['results'][$j]['type'].")"."</option>";
		  	 /*
		  	 if($data['rajaongkir']['results'][$j]['type']=="Kabupaten"){
		  	 	echo "Kabupaten";
		  	 }esle{
		  	 	echo "Kota";
		  	 }
		  	 */

		  }
		}
	}

	function getKecamatan($destination){
		
		
		if($destination == 160){
				
			
			echo "<option value='Ambulu'>Ambulu</option>";
			echo "<option value='Kencong'>Kencong</option>";
			echo "<option value='Jombang'>Jombang</option>";
		
			
		}else{
			
			echo "<input></input>";
		}

	}
	function getDesa($kecamatan){
		
		
		if($kecamatan == 'Ambulu'){
				
			
			echo "<option value='Ambulu'>Wuluhan</option>";
			echo "<option value='Kencong'>Jenggawah</option>";
			echo "<option value='Jombang'>Jombang</option>";
		
			
		}else if($kecamatan == 'Jombang'){
			
			echo "<option value='Keting'>Keting</option>";
			echo "<option value='Padomasan'>Padomasan</option>";
			echo "<option value='Paseban'>Paseban</option>";
		}

	}

	function getCost()
	{
		$idpsn = $this->input->get('idpsn');
		$origin = $this->input->get('origin');
		$destination = $this->input->get('destination');
		$berat = $this->input->get('berat');
		$courier = $this->input->get('courier');

		$data = array(	'idpsn' => $idpsn,
						'origin' => $origin,
						'destination' => $destination, 
						'berat' => $berat, 
						'courier' => $courier 

		);
		
		$this->load->view('rajaongkir/GetCost', $data);
	}
	
}
?>
