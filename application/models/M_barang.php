<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

	public function getAllBarang()
	{
		return $this->db->get('staff')->result_array();
	}

	public function getAllJenis()
	{
		return $this->db->get('jenis')->result_array();
	}

	public function hapusSlide($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('slide');
	}

	public function tambahBarang()
	{
		$data = [
			'id' => htmlspecialchars($this->input->post('id', true)),
			'kategori' => '0',
			'photo' => $this->_uploadImage()
		];

		$this->db->insert('fasilitas', $data); // query untuk insert data ke tabel barang
	}

	public function tambahSlide()
	{
		$data = [
			'thumbnail' => $this->_uploadSlide()
		];

		$this->db->insert('slide', $data); // query untuk insert data ke tabel barang
	}
	public function tambahFile()
	{
		$data = [
			'title' => htmlspecialchars($this->input->post('title', true)),
			'file' => $this->_uploadFile()
		];

		$this->db->insert('files', $data); // query untuk insert data ke tabel barang
	}

	public function tambahBarangg()
	{
		$data = [
			'id' => htmlspecialchars($this->input->post('id', true)),
			'nama' => htmlspecialchars($this->input->post('nama_barang', true)),
			'jabatan' => htmlspecialchars($this->input->post('jabatan', true)),
			'photo' => $this->_uploadImage()
		];

		$this->db->insert('staff', $data); // query untuk insert data ke tabel barang
	}

	public function tambahdata()
	{
		$data = [
			'id' => null,
			'nama_pesawat' => htmlspecialchars($this->input->post('nama_barang', true)),
			'kategori' => htmlspecialchars($this->input->post('kategori', true)),
			'jam_tiba' => htmlspecialchars($this->input->post('jam_tiba', true)),
			'jam_berangkat' => htmlspecialchars($this->input->post('jam_berangkat', true)),
			'tujuan' => htmlspecialchars($this->input->post('tujuan', true)),
		];

		$this->db->replace('jadwal_penerbangan', $data); // query untuk insert data ke tabel barang
	}

	public function tambahsambutan()
	{
		$data = [
			'deskripsi' => htmlspecialchars($this->input->post('jenis', true)),
		];

		$this->db->where('id', 1);
		$this->db->update('about', $data);
	}

	public function tambahBarangs()
	{
		$data = [
			'id' => htmlspecialchars($this->input->post('id', true)),
			'nama_barang' => htmlspecialchars($this->input->post('nama_barang', true)),
			'jenis' => htmlspecialchars($this->input->post('jenis', true)),
			'gambar' => $this->_uploadVideo()
		];

		$this->db->insert('barang', $data); // query untuk insert data ke tabel barang
	}


	public function tambahJenis()
	{
		$data = [
			'id' => htmlspecialchars($this->input->post('id', true)),
			'jenis' => htmlspecialchars($this->input->post('jenis', true)),
		];

		$this->db->insert('jenis', $data); // query untuk insert data ke tabel barang
	}

	public function getBarangById($id)
	{
		return $this->db->get_where('barang', ['id' => $id])->row_array();

	}

	public function editBarang()
	{
		$data = [
			'nama_barang' => htmlspecialchars($this->input->post('nama_barang', true)),
			'jenis' => htmlspecialchars($this->input->post('jenis', true)),
			'gambar' => $this->_uploadImage()
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('barang', $data);
	}

	public function tambahInfo()
	{
		$data = [
			'name' => htmlspecialchars($this->input->post('nama', true)),
			'caption' => htmlspecialchars($this->input->post('caption', true)),
			'jabatan' => htmlspecialchars($this->input->post('jabatan', true)),
			'photo' => $this->_uploadImagess()
		];

		$this->db->where('id', 1);
		$this->db->update('sambutan', $data);
	}

	public function updateKontak()
	{
		$data = [
			'whatsapp' => htmlspecialchars($this->input->post('wa', true)),
			'facebook' => htmlspecialchars($this->input->post('fb', true)),
			'email' => htmlspecialchars($this->input->post('email', true)),
			'telepon' => htmlspecialchars($this->input->post('telp', true)),
		];

		$this->db->where('id', 1);
		$this->db->update('kontak', $data);
	}

	public function kode()
	{
	  	$this->db->select('RIGHT(barang.id,2) as id', FALSE);
	  	$this->db->order_by('id','DESC');
	  	$this->db->limit(1);
	  	$query = $this->db->get('barang');  //cek dulu apakah ada sudah ada kode di tabel.
	  	if($query->num_rows() <> 0){
		   //cek kode jika telah tersedia
		   $data = $query->row();
		   $kode = intval($data->id) + 1;
	  	} else{
		   $kode = 1;  //cek jika kode belum terdapat pada table
	  	}
		  $tgl=date('dmY');
		  $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
		  $kodetampil = "BRG".$tgl.$batas;  //format kode
		  return $kodetampil;
	}

	public function hapusData($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('barang');
	}

	public function hapusDataJenis($jenis)
	{
		$this->db->where('jenis', $jenis);
		$this->db->delete('jenis');
	}

	private function _uploadImage()
	{
			$config = [ // set image properties
				'upload_path' => './upload/fasilitas', // lokasi upload file
				'allowed_types' => 'gif|jpg|jpeg|png', // tipe gambar yang di ijinkan u/ upload
				'overwrite' 	=> TRUE, // menimpa data ketika update
				'max_size' => 4024 // ukuran maksimal gambar yang di perbolehkan upload (2Mb)
			];
    	$this->load->library('upload', $config); // load library untuk upload file dan syarat untuk upload file

    	if ($this->upload->do_upload('gambar')) // cek ketika gambar di upload dari input file 'gambar'
    	{
	     return $this->upload->data('file_name'); // melakukan proses upload data dan mengambil nilai nama dari properties gambar
		 }
		 	return "default.jpg"; // mengambil nilai default.jpg untuk di simpan ke db ketika gagal upload / user tdk menyertakan gambar
	}

	private function _uploadImagess()
	{
			$config = [ // set image properties
				'upload_path' => './upload/banner', // lokasi upload file
				'allowed_types' => 'gif|jpg|jpeg|png', // tipe gambar yang di ijinkan u/ upload
				'overwrite' 	=> TRUE, // menimpa data ketika update
				'max_size' => 4024 // ukuran maksimal gambar yang di perbolehkan upload (2Mb)
			];
    	$this->load->library('upload', $config); // load library untuk upload file dan syarat untuk upload file

    	if ($this->upload->do_upload('gambar')) // cek ketika gambar di upload dari input file 'gambar'
    	{
	     return $this->upload->data('file_name'); // melakukan proses upload data dan mengambil nilai nama dari properties gambar
		 }
		 	return "default.jpg"; // mengambil nilai default.jpg untuk di simpan ke db ketika gagal upload / user tdk menyertakan gambar
	}

	private function _uploadFile()
	{
			$config = [ // set image properties
				'upload_path' => './upload/file', // lokasi upload file
				'allowed_types' => 'pdf', // tipe gambar yang di ijinkan u/ upload
				'overwrite' 	=> TRUE, // menimpa data ketika update
				'max_size' => 4024 // ukuran maksimal gambar yang di perbolehkan upload (2Mb)
			];
    	$this->load->library('upload', $config); // load library untuk upload file dan syarat untuk upload file

    	if ($this->upload->do_upload('gambar')) // cek ketika gambar di upload dari input file 'gambar'
    	{
	     return $this->upload->data('file_name'); // melakukan proses upload data dan mengambil nilai nama dari properties gambar
		 }
		 	return "default.pdf"; // mengambil nilai default.jpg untuk di simpan ke db ketika gagal upload / user tdk menyertakan gambar
	}

	private function _uploadSlide()
	{
			$config = [ // set image properties
				'upload_path' => './upload/banner', // lokasi upload file
				'allowed_types' => 'gif|jpg|jpeg|png', // tipe gambar yang di ijinkan u/ upload
				'overwrite' 	=> TRUE, // menimpa data ketika update
				'max_size' => 4024 // ukuran maksimal gambar yang di perbolehkan upload (2Mb)
			];
    	$this->load->library('upload', $config); // load library untuk upload file dan syarat untuk upload file

    	if ($this->upload->do_upload('gambar')) // cek ketika gambar di upload dari input file 'gambar'
    	{
	     return $this->upload->data('file_name'); // melakukan proses upload data dan mengambil nilai nama dari properties gambar
		 }
		 	return "default.jpg"; // mengambil nilai default.jpg untuk di simpan ke db ketika gagal upload / user tdk menyertakan gambar
	}

	private function _uploadVideo()
	{
			$config = [ // set image properties
				'upload_path' => './upload/product', // lokasi upload file
				'allowed_types' => 'mp4|mkv|3gp', // tipe gambar yang di ijinkan u/ upload
				'overwrite' 	=> TRUE, // menimpa data ketika update
				'max_size' => 50024 // ukuran maksimal gambar yang di perbolehkan upload (2Mb)
			];
    	$this->load->library('upload', $config); // load library untuk upload file dan syarat untuk upload file

    	if ($this->upload->do_upload('video')) // cek ketika gambar di upload dari input file 'gambar'
    	{
	     return $this->upload->data('file_name'); // melakukan proses upload data dan mengambil nilai nama dari properties gambar
		 }
		 	return "default.mp4"; // mengambil nilai default.jpg untuk di simpan ke db ketika gagal upload / user tdk menyertakan gambar
	}

	public function select_jenis($jenis)
	{
	  $this->db->where('jenis', $jenis);
		return $this->db->get('barang')->result();
	}

}

/* End of file M_barang.php */
/* Location: ./application/models/M_barang.php */
