<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class mahasiswa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('m_mhs');


	}

	// public function index()
	// {
	// 	$data['mhs'] = $this->m_mhs->tampilData()->result();
	// 	$this->load->view('v_mhs', $data);
	// }

	public function index(){

		$config['base_url'] 	= 'http://localhost/mahasiswa/mahasiswa/index';
		$config['total_rows'] 	= $this->m_mhs->jumlahMhs()->num_rows();
		$config['per_page'] 	= 3;


		$this->pagination->initialize($config);
		if ($this->uri->segment(3) != NULL) {
			$halaman = $this->uri->segment(3);
		}
		else{
			$halaman = 0;
		}

		$data['data'] = $this->m_mhs->tampil_data($halaman, $config['per_page'])->result();
		
		//$data['history'] = $this->m_jemput->tampil_data()->result();
		$data['hal'] = $this->pagination->create_links();
		$this->load->view('v_mhs',$data);
	}

	public function input()
	{
		$this->load->view('v_input');
	}

	public function prosesInput()
	{
		$nim = $this->input->post('nim');
		$nama 	 = $this->input->post('nama');
		$tgl_lahir	 = $this->input->post('tgl_lahir');
		$ipk = $this->input->post('ipk');
		$kelas = $this->input->post('kelas');
		//$foto 	 = $this->input->post('foto');

		$data = array(
				'nim' 	=> $nim,
				'nama'  => $nama,
				'tgl_lahir' => $tgl_lahir,
				'ipk' 	=> $ipk,
				'kelas'	=> $kelas
				);
		$this->m_mhs->input_data($data, 'mahasiswa');
		redirect('mahasiswa','refresh');
	}

	public function editData()
	{
		$data = $this->m_mhs->jumlahMhs();
		$this->session->set_userdata('mahasiswa', $data);
		$query['dataMhs'] = $this->m_mhs->getData($_GET['nim']);
		$this->load->view('v_edit', $query);
	}

	public function prosesEdit()
	{
		$nim = $this->input->post('nim');
		$nama 	 = $this->input->post('nama');
		$tgl_lahir	 = $this->input->post('tgl_lahir');
		$ipk = $this->input->post('ipk');
		$kelas = $this->input->post('kelas');
		

		$this->m_mhs->editData($nim, $nama, $tgl_lahir, $ipk, $kelas);
		redirect('mahasiswa','refresh');
	}

}
 ?>