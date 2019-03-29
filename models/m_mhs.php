<?php 

/**
 * 
 */
class m_mhs extends CI_Model
{
	
	public function jumlahMhs()
	{
		return $this->db->get('mahasiswa');
	}

	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function tampil_data($halaman, $jumlah)
	{
		return $this->db->query("SELECT * FROM mahasiswa LIMIT $halaman, $jumlah");
	}

	public function getData($nim)
	{
		$this->db->from('mahasiswa');
		$this->db->where('nim', $nim);

		$query = $this->db->get();
		return $query->result();
	}

	public function editData($nim, $nama, $tgl_lahir, $ipk, $kelas)
	{

		$data = array(
				'nim' 	=> $nim,
				'nama'  => $nama,
				'tgl_lahir' => $tgl_lahir,
				'ipk' 	=> $ipk,
				'kelas'	=> $kelas
				);

		$this->db->where('nim', $nim);
		$this->db->update('mahasiswa', $data);
	}
}
 ?>