<?php 

class Crud extends CI_Controller {
	
	public function __construct()
  {
    parent::__construct();
    $this->load->model('mcrud');
  }

	public function index()
	{
    redirect('crud/tampil');
	}

	public function tampil()
	{
		$data = array(
			'isi'=> $this->mcrud->retrive(),
		);
		$this->load->view('tampil_data', $data);
	}

	public function tambah()
	{
		$data = array('judul' => 'Tambah Data');
		$this->load->view('tambah_data',$data);
  	}

  	public function simpan()
  	{
  		$data = array(
  			'id' => $this->input->post('id')
  			, 'nama' => $this->input->post('nama')
  		);
  		$this->mcrud->simpan_data($data);
  	}

  	public function ubah()
  	{
  		$id = $this->uri->segment(3);
    	$q = $this->mcrud->getRow($id);
    	$data = array(
    		'judul' => 'Ubah Data',
    		'id' => $q->row('id'),
    		'nama' => $q->row('nama'),
    	);

    	$this->load->view('update_data', $data);

    }

    public function update()

    {

    	$this->mcrud->update_data();
  	}

  	public function hapus() 
  	{ 
    	$this->mcrud->hapus_data();
  	}

}

?>