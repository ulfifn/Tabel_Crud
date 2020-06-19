<?php 

class Mcrud extends CI_Model{

	public function retrive()
	{
		$this->db->select('id,nama');
		$this->db->from("user");
		$q = $this->db->get();
		if ($q->num_rows()>0) {

			$hasil = $q->result_array();
		}else{
			$hasil = array();
		} 

		$q->free_result();
		return $hasil;
	}

	public function simpan_data($data)
  	{
    	$q = $this->db->insert('user', $data);
    	if ($q) {
    		redirect('crud/tampil');
    	}else{
      		redirect('crud/tambah');
    	}
  	}

  	public function getRow($id)
  	{
    	$q = $this->db->where('id', $id)->get('user');
    	return $q;
  	}

  	public function update_data()
  	{
    	$id = $this->input->post('id');
    	$data = array('nama' => $this->input->post('nama'));
    	$q = $this->db->where('id', $id)->update('user', $data);
    	if ($q) {
      		redirect('crud/tampil');
    	}else{
      		redirect('crud/ubah');
    	} 
  	}

  	public function hapus_data()
  	{
    	$id = $this->uri->segment(3);
    	$q = $this->db->where('id', $id)->delete('user');
    	if ($q) {
      		redirect('crud/tampil');
    	}
  	}
}
 ?>